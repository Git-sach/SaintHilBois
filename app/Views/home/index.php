<link rel="stylesheet" href="style/home/index.css">
<div class="container">
    <div class="imgIntro">
    </div>

    <div class="intro">
        <div class="imgMe">

        </div>
        <div class="textMe">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
    </div>

    <div class="lastPosts">
        <div class="cadre">
            <div class="title">
                <svg viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="9.98032" height="9.98032" transform="matrix(0.736068 0.676907 -0.736068 0.676907 7.34619 0.177612)" fill="#F4E187"/>
                </svg>
                <h1>Derniers articles</h1>
                <svg viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="9.98032" height="9.98032" transform="matrix(0.736068 0.676907 -0.736068 0.676907 7.34619 0.177612)" fill="#F4E187"/>
                </svg>
            </div>

            <ul class="cards">
                <?php foreach($posts as $post): ?>
                    <div class="card">  
                        <a href="<?= $post->URL ?>">
                            <img class="imgCard" src=<?= $post->img == null ? "http://via.placeholder.com/200x120" : "imgdata/$post->img"?>>
                            <p class="category"><em><?= $post->category?></em></p>
                            <div class="textCard">
                                <div class="border">
                                    <div class="titleCard"><a href="<?= $post->URL ?>"><?= $post->title ?></a></div>
                                    <p><?= $post->Extract; ?></p>
                                    <div class="footer">
                                        <div class="social">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                <path d="M6.58276 10.4073C8.78902 10.4073 10.7077 9.17722 11.6905 7.3653C11.1923 6.44502 10.4546 5.6765 9.55549 5.14102C8.65637 4.60554 7.62925 4.32302 6.58276 4.32333C5.53627 4.32302 4.50914 4.60554 3.61003 5.14102C2.71091 5.6765 1.97323 6.44502 1.47501 7.3653C1.97323 8.28558 2.71091 9.05411 3.61003 9.58959C4.50914 10.1251 5.53627 10.4076 6.58276 10.4073ZM6.58276 3.77024C7.77931 3.76984 8.95171 4.10697 9.96528 4.7429C10.9789 5.37883 11.7925 6.28777 12.3127 7.3653C11.7925 8.44284 10.9789 9.35178 9.96528 9.98771C8.95171 10.6236 7.77931 10.9608 6.58276 10.9604C5.38621 10.9608 4.21381 10.6236 3.20023 9.98771C2.18666 9.35178 1.37302 8.44284 0.852783 7.3653C1.37302 6.28777 2.18666 5.37883 3.20023 4.7429C4.21381 4.10697 5.38621 3.76984 6.58276 3.77024ZM6.58276 4.87641C7.24285 4.87641 7.87591 5.13864 8.34267 5.60539C8.80943 6.07215 9.07165 6.70521 9.07165 7.3653C9.07165 8.0254 8.80943 8.65846 8.34267 9.12521C7.87591 9.59197 7.24285 9.85419 6.58276 9.85419C5.92266 9.85419 5.28961 9.59197 4.82285 9.12521C4.35609 8.65846 4.09387 8.0254 4.09387 7.3653C4.09387 6.70521 4.35609 6.07215 4.82285 5.60539C5.28961 5.13864 5.92266 4.87641 6.58276 4.87641ZM6.58276 5.4295C6.06935 5.4295 5.57697 5.63345 5.21394 5.99648C4.85091 6.35952 4.64696 6.8519 4.64696 7.3653C4.64696 7.87871 4.85091 8.37109 5.21394 8.73412C5.57697 9.09716 6.06935 9.30111 6.58276 9.30111C7.09616 9.30111 7.58854 9.09716 7.95158 8.73412C8.31461 8.37109 8.51856 7.87871 8.51856 7.3653C8.51856 6.8519 8.31461 6.35952 7.95158 5.99648C7.58854 5.63345 7.09616 5.4295 6.58276 5.4295Z" fill="#505D68" fill-opacity="0.7"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0">
                                                <rect width="13.2741" height="13.2741" fill="white" transform="translate(0.222168 0.451721)"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                            <p class="data">1</p>

                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.81877 7.22842C2.56493 6.99145 2.36831 6.70655 2.2421 6.39285C2.11588 6.07915 2.06299 5.74389 2.08696 5.40954C2.11094 5.0752 2.21122 4.7495 2.3811 4.45429C2.55097 4.15909 2.78651 3.90119 3.07192 3.69789C3.35732 3.4946 3.686 3.35061 4.03591 3.27557C4.38582 3.20054 4.74887 3.1962 5.10073 3.26284C5.45259 3.32948 5.78511 3.46556 6.076 3.66197C6.36689 3.85837 6.60943 4.11055 6.78736 4.4016H7.44988C7.6278 4.11055 7.87034 3.85837 8.16123 3.66197C8.45213 3.46556 8.78465 3.32948 9.13651 3.26284C9.48836 3.1962 9.85142 3.20054 10.2013 3.27557C10.5512 3.35061 10.8799 3.4946 11.1653 3.69789C11.4507 3.90119 11.6863 4.15909 11.8561 4.45429C12.026 4.7495 12.1263 5.0752 12.1503 5.40954C12.1742 5.74389 12.1214 6.07915 11.9951 6.39285C11.8689 6.70655 11.6723 6.99145 11.4185 7.22842L7.11862 11.2427L2.81877 7.22898V7.22842ZM11.8368 7.62111C12.1403 7.33784 12.3777 6.99901 12.5341 6.62595C12.6905 6.25288 12.7625 5.85365 12.7456 5.45336C12.7286 5.05307 12.6231 4.66039 12.4357 4.3C12.2483 3.93961 11.983 3.61931 11.6565 3.35926C11.33 3.09921 10.9494 2.90502 10.5386 2.7889C10.1278 2.67279 9.69572 2.63727 9.26951 2.68458C8.8433 2.73188 8.43218 2.86098 8.06202 3.06377C7.69186 3.26655 7.37066 3.53863 7.11862 3.86289C6.86658 3.53863 6.54538 3.26655 6.17522 3.06377C5.80506 2.86098 5.39394 2.73188 4.96773 2.68458C4.54152 2.63727 4.10943 2.67279 3.69864 2.7889C3.28784 2.90502 2.90724 3.09921 2.58076 3.35926C2.25427 3.61931 1.98898 3.93961 1.80155 4.3C1.61412 4.66039 1.50862 5.05307 1.49168 5.45336C1.47474 5.85365 1.54673 6.25288 1.70312 6.62595C1.8595 6.99901 2.09691 7.33784 2.4004 7.62111L7.11862 12.0242L11.8368 7.62167V7.62111Z" fill="#505D68" fill-opacity="0.7"/>
                                            </svg>
                                            <p class="data">3</p>

                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.99254 11.8379L3.97591 9.8545H10.2888C10.5822 9.8545 10.8636 9.73796 11.071 9.53051C11.2785 9.32306 11.395 9.0417 11.395 8.74833V3.77055C11.395 3.47717 11.2785 3.19581 11.071 2.98837C10.8636 2.78092 10.5822 2.66438 10.2888 2.66438H3.09871C2.80534 2.66438 2.52398 2.78092 2.31653 2.98837C2.10908 3.19581 1.99254 3.47717 1.99254 3.77055V11.8379ZM1.99254 12.6199H1.43945V3.77055C1.43945 3.33049 1.61427 2.90845 1.92544 2.59728C2.23661 2.2861 2.65865 2.11129 3.09871 2.11129H10.2888C10.7289 2.11129 11.1509 2.2861 11.4621 2.59728C11.7733 2.90845 11.9481 3.33049 11.9481 3.77055V8.74833C11.9481 9.18839 11.7733 9.61043 11.4621 9.9216C11.1509 10.2328 10.7289 10.4076 10.2888 10.4076H4.20489L1.99254 12.6199ZM3.6518 4.32364H9.73575V4.87672H3.6518V4.32364ZM3.6518 5.9829H9.73575V6.53598H3.6518V5.9829ZM3.6518 7.64215H8.07649V8.19524H3.6518V7.64215Z" fill="#505D68" fill-opacity="0.7"/>
                                            </svg>
                                            <p class="data">2</p>
                                        </div>
                                        <div class="date">
                                            <p><em><?= $post->getdate()->format('jS F Y') ?></em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;?>
            </ul>
        </div>
    </div>

    <div class="Recipe">
        <a href="?p=creation.posts.index">
            <img src="/img/cardsRecipe.png">
            <p>Retrouvez toutes les recettes</p>
            <svg viewBox="0 0 105 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 21L104 21" stroke="black" stroke-linejoin="round"/>
                <line x1="83.6396" y1="42.2784" x2="104.433" y2="20.6535" stroke="black" stroke-linejoin="round"/>
                <line x1="83.3536" y1="0.646447" x2="104.567" y2="21.8596" stroke="black" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
</div>
