<?php
    include "includes/header.php";

    include_once "connection.php";

    $sql = "SELECT * FROM posts";

    $result = $conn->query($sql);

    $posts = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <div class="row mb-2">
        <?php if(count($posts) > 0): ?>
            <?php foreach ($posts as $key => $post): ?>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
<!--                            <strong class="d-inline-block mb-2 text-primary">World</strong>-->
                            <h3 class="mb-0">
                                <a class="text-dark" href="https://getbootstrap.com/docs/4.1/examples/blog/#"><?=$post['title']; ?></a>
                            </h3>
                            <div class="mb-1 text-muted"><?=date("M d", strtotime($post['date_added'])); ?> </div>
                            <p class="card-text mb-auto"><?=substr($post['content'], 0, 100); ?> ... </p>
                            <a href="http://create.test/single_post.php?id=<?=$post['id']; ?>">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_167c1222e5a%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_167c1222e5a%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <h1> No post available, kindly check back!🙂</h1>
        <?php endif; ?>
<!--        <div class="col-md-6">-->
<!--            <div class="card flex-md-row mb-4 shadow-sm h-md-250">-->
<!--                <div class="card-body d-flex flex-column align-items-start">-->
<!--                    <strong class="d-inline-block mb-2 text-success">Design</strong>-->
<!--                    <h3 class="mb-0">-->
<!--                        <a class="text-dark" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Post title</a>-->
<!--                    </h3>-->
<!--                    <div class="mb-1 text-muted">Nov 11</div>-->
<!--                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>-->
<!--                    <a href="http://create.test/single_post.php">Continue reading</a>-->
<!--                </div>-->
<!--                <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_167c1222e5e%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_167c1222e5e%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>

<!-- /.container -->
<?php include "includes/footer.php"; ?>