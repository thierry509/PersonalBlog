<?php
$stylePage = [
    './css/blog/style.css'
];
require  viewPAth . '/template/header.php' ?>
<section id="recent">
    <h1>Recent post</h1>
    <div class="posts">
    </div>
    <a href="" class="more">View more</a>
</section>
<section id="popular">
    <h1>Popular post</h1>
    <div class="posts">

    </div>
    <a href="" class="more">View more</a>
</section>
<template id="post-box-template">
    <a href="">
        <div class="post-box">
            <div class="img-box blog img">
            </div>
            <div class="detail">
                <div class="category">
                    business
                </div>
                <h3>Enpotans ki genyn lew gen yon imaj mak pou bizis ou</h3>
                <div class="first">
                    Enpotans ki genyn lew gen yon imaj mak pou bizis ou...
                </div>
            </div>
        </div>
    </a>
</template>
<?php require  viewPAth . '/template/footer.php' ?>