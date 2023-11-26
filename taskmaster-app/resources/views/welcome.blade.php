<style>

.container--video-home {
    z-index: 1;
    top: 0;
    left: 50%;
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-transform: translate(-50%,0);
    transform: translate(-50%,0);
    background: rgba(0,0,0,.65)
}

.home-wrapper {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    height: 100%
}

@media all and (max-width: 780px) {
    .home-wrapper {
        width:95%;
        margin: 0 auto
    }
}

.home-banner-wrapper {
    position: relative;
    overflow: hidden;
    height: calc(100vh - 240px);
    min-height: 380px;
    margin: 0 auto;
    background: url(img/headers/home-video-bg.png) no-repeat;
    background-size: cover;
    color: #fff;
    text-align: center
}

@media all and (max-width: 320px) {
    .home-banner-wrapper {
        margin:0 auto;
        height: 80vh
    }
}

@media all and (max-width: 780px) {
    .home-banner-wrapper {
        min-height:100px;
        max-height: 650px
    }
}

.home-banner-wrapper__title {
    margin: 0 auto 32px;
    font-weight: 700;
    font-size: 80px
}

@media all and (max-width: 980px) {
    .home-banner-wrapper__title {
        font-size:2.5rem;
        margin: 0
    }
}

@media all and (max-width: 320px) {
    .home-banner-wrapper__title {
        margin:-15px 0 0
    }
}

.home-banner-wrapper__title span {
    display: block;
    font-size: 32px;
    font-weight: 400;
    line-height: 30px
}

@media all and (max-width: 780px) {
    .home-banner-wrapper__title span {
        font-size:22px
    }
}

.home-banner-wrapper__subtitle {
    max-width: 920px;
    font-size: 24px
}

@media all and (max-width: 320px) {
    .home-banner-wrapper__subtitle {
        margin:5px auto 0;
        font-size: 12px
    }
}

@media all and (max-width: 980px) {
    .home-banner-wrapper__subtitle {
        margin:10px auto;
        font-size: 14px
    }
}

.home-banner-wrapper video {
    z-index: 0;
    -o-object-fit: cover;
    object-fit: cover;
    width: 100%;
    height: 100%
}

.home-events-wrapper {
    margin: 0 0 72px
}

@media all and (max-width: 780px) {
    .home-events-wrapper {
        margin:0 20px 72px
    }
}

@media all and (max-width: 780px) {
    .home-events-wrapper .btn {
        margin:0 auto
    }
}

.home-events__titles-wrapper {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    min-height: 230px;
    margin: 20px 0 -3rem
}

@media all and (max-width: 780px) {
    .home-events__titles-wrapper {
        display:block;
        margin: 0 auto 1rem;
        padding: 0;
        min-height: auto
    }
}

.home-events__titles-wrapper>div {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}

.home-events__image {
    width: 150px;
    height: 270px
}

@media all and (max-width: 780px) {
    .home-events__image {
        display:block;
        position: relative;
        height: 120px;
        width: auto;
        margin: 0 auto
    }
}

.home-events__title {
    font-size: 80px;
    line-height: 98px;
    letter-spacing: -1.2px
}

@media all and (max-width: 780px) {
    .home-events__title {
        margin:.5rem auto;
        font-size: 2rem;
        line-height: 1;
        font-weight: 700
    }
}

.home-events__subtitle {
    font-weight: 300;
    font-size: 20px;
    line-height: 28px;
    letter-spacing: -1px;
    text-align: center
}

@media all and (max-width: 780px) {
    .home-events__subtitle {
        font-size:16px;
        line-height: 20px
    }
}

.home_number__text {
    letter-spacing: 1px
}

social-media__item--whatsapp .home_phrase {
    letter-spacing: 5px
}

.bg-ilustra {
    float: right;
    width: 350px;
    height: 340px
}

.bg-ilustra--home {
    margin: -170px 0 0;
    background: url(img/ilustras/bg-home.png) right top no-repeat
}

@media all and (max-width: 780px) {
    .bg-ilustra--home {
        float:none;
        width: 100%;
        height: 140px;
        margin: 25px auto -65px;
        background-size: contain
    }
}
    </style>


<div class="home-banner-wrapper">
    <div class="container--video-home">
        <div class="home-wrapper align-items-center">
            <h2>Bem Vindo ao Taskmaster</h2>
            <h2 class="home-banner-wrapper__title">Escotismo,<span> educação para a vida.</span></h2>
            <p class="home-banner-wrapper__subtitle">Venha fazer parte deste Movimento que já conta com mais de 57
                milhões de pessoas em todo o mundo.</p>
        </div>
    </div>
    <video poster="" id="bgvid" playsinline="" autoplay="" muted="" loop="">
        <source src="https://www.escoteiros.org.br/wp-content/themes/escoteiros-theme/video/video-home.mp4"
            type="video/mp4">
    </video>
</div>


<div class="container mt-4 d-flex justify-content-between">
    <div class="container-fluid mx-2 p-4" style="
    border-radius: 0.5rem;
    background: #1E1D27;">
        Aqui você pode contribuir com o codigo fonte de projetos feitos pelos escoteiros
    </div>
    <div class="container-fluid mx-2  p-4" style="
      border-radius: 0.5rem;
      background: #1E1D27;">
        Venha ser um contribuidor e ajude a comunidade escoteira
    </div>
    <div class="container-fluid mx-2 p-4" style="
      border-radius: 0.5rem;
      background: #1E1D27;">
        Você podera ganhar medalhas e pontos por contribuir com a comunidade escoteira

    </div>

</div>
