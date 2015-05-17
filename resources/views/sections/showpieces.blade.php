</div>
<section id="portfolio">

    <div class="container inner">
        <div class="row">
            <div class="col-md-8 col-sm-9 center-block text-center">
                <header>
                    <h1>ShowPieces</h1>
                    <p>
                    @if (count($posts) == 0)
                            There are currently no blog posts.
                    @else
                        Here you may find our blog posts:
                    @endif
                    </p>

                    @auth('blog')
                            <a class="btn btn-primary" href="{!! URL::route('blog.posts.create') !!}"><i class="fa fa-book"></i> New Post</a>
                    @endauth

                </header>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class="container inner-bottom">
        <div class="row">
            <div class="col-sm-12 portfolio">

                <ul class="filter text-center">
                    <li><a href="#" data-filter="*" class="active">All</a></li>
                    <li><a href="#" data-filter=".identity">Identity</a></li>
                    <li><a href="#" data-filter=".interactive">Interactive</a></li>
                    <li><a href="#" data-filter=".print">Print</a></li>
                    <li><a href="#" data-filter=".photography">Photography</a></li>
                </ul>
                <!-- /.filter -->

                <ul class="items col-3 gap">

                    @foreach($posts as $post)
                        <li class="item thumb interactive">
                            <figure>

                                <div class="icon-overlay icn-link">
                                    <a href="{!! URL::route('blog.posts.show', array('posts' => $post->id)) !!}"><img src="/assets/images/art/work01.jpg" alt=""></a>
                                </div>
                                <!-- /.icon-overlay -->

                                <figcaption class="bordered no-top-border">
                                    <div class="info">
                                        <h4><a href="{!! URL::route('blog.posts.show', array('posts' => $post->id)) !!}">{!! $post->title !!}</a></h4>

                                        <p>Interactive</p>
                                    </div>
                                    <!-- /.info -->
                                </figcaption>
                            </figure>
                        </li>
                        <!-- /.item -->
                    @endforeach
                </ul>
                <!-- /.items -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- ============================================================= SECTION – PORTFOLIO : END ============================================================= -->
