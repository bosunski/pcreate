<?php
    $id = (int) $_GET['id'];
    include_once "connection.php";
    $sql = "SELECT * FROM posts WHERE id=$id";

    $result = $conn->query($sql);

    $post = $result->fetch(PDO::FETCH_ASSOC);

    if(!$post) {
        header("HTTP/1.0 404 Not Found");
        exit;
    }

    include "includes/header.php";

?>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                From my Journal!
            </h3>

            <div class="blog-post">
                <h2 class="blog-post-title"><?=$post['title']; ?></h2>
                <p class="blog-post-meta"><?=date("M d, Y", strtotime($post['date_added'])); ?> by <a href="//twiter.com/bosunski">Bosunski</a></p>

                <p>
                    <?=$post['content']; ?>
                </p>

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Newer</a>
                </nav>
            </div>

        </div><!-- /.blog-main -->

<!--        <aside class="col-md-4 blog-sidebar">-->
<!--            <div class="p-3 mb-3 bg-light rounded">-->
<!--                <h4 class="font-italic">About</h4>-->
<!--                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>-->
<!--            </div>-->
<!---->
<!--            <div class="p-3">-->
<!--                <h4 class="font-italic">Archives</h4>-->
<!--                <ol class="list-unstyled mb-0">-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">March 2014</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">February 2014</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">January 2014</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">December 2013</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">November 2013</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">October 2013</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">September 2013</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">August 2013</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">July 2013</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">June 2013</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">May 2013</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">April 2013</a></li>-->
<!--                </ol>-->
<!--            </div>-->
<!---->
<!--            <div class="p-3">-->
<!--                <h4 class="font-italic">Elsewhere</h4>-->
<!--                <ol class="list-unstyled">-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">GitHub</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">Twitter</a></li>-->
<!--                    <li><a href="https://getbootstrap.com/docs/4.1/examples/blog/#">Facebook</a></li>-->
<!--                </ol>-->
<!--            </div>-->
<!--        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

<?php include "includes/footer.php"; ?>