<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="..\resources\css\app.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>TaskMaster</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
        //fazer função de ativo na navbar do bootstrap pegar o baseurl do laravel se n tiver nada depois do / ativar o home
        $(document).ready(function() {
            var url = window.location.href;
            console.log(url);
            $('.navbar-nav li a').each(function() {
                console.log(this.href, url, url === (this.href))
                if (url === (this.href)) {
                    $(this).closest('li').addClass('active');
                }
            });
        });
    </script>
</head>
<header class="masthead mb-auto">
    <nav class="navbar navbar-expand-lg navbar-dark px-5"
        style="background-color: #13111B; box-shadow: 5px 1px 5px Black;">
        <a class="navbar-brand" href="<?= url('') ?>/">
            <svg width="160" height="31" viewBox="0 0 160 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_35_44)">
                    <path
                        d="M18.9501 25.5963L18.8748 24.4465L20.1554 24.0716L25.2782 11.5484L27.1616 10.4735L32.8368 24.0716L34.1174 24.4465L34.0423 25.5963H27.8898L27.8145 24.4465L29.3966 24.0716L27.9903 20.672L27.714 19.8472L25.1276 13.6481L25.8056 13.6731L23.5455 19.7972L23.2944 20.5471L22.0639 24.0716L23.646 24.4465L23.5706 25.5963H18.9501ZM22.7671 21.222V19.6472C23.0851 19.6638 23.4702 19.6888 23.9222 19.7222C24.391 19.7388 24.9852 19.7472 25.7051 19.7472C26.4082 19.7472 26.9942 19.7388 27.4629 19.7222C27.9484 19.6888 28.3418 19.6638 28.6431 19.6472V21.197C28.2414 21.197 27.7978 21.1886 27.3123 21.172C26.8435 21.1553 26.3078 21.147 25.7051 21.147C25.1024 21.147 24.5667 21.1553 24.098 21.172C23.6292 21.1886 23.1856 21.2053 22.7671 21.222ZM40.0811 25.8213C39.3611 25.8213 38.5911 25.7297 37.7708 25.5463C36.9506 25.3464 36.2557 25.0881 35.6866 24.7715L35.5608 21.222L36.9923 21.122L37.796 23.5716C38.1808 23.8216 38.6077 24.0132 39.0766 24.1465C39.5454 24.2632 39.9974 24.3215 40.4326 24.3215C41.2194 24.3215 41.822 24.1549 42.2406 23.8216C42.676 23.4716 42.8934 23.005 42.8934 22.4218C42.8934 21.8385 42.7177 21.3636 42.3663 20.997C42.0146 20.6304 41.5626 20.3138 41.0103 20.0471C40.4577 19.7805 39.8717 19.5222 39.2523 19.2723C38.6328 19.0223 38.0468 18.7223 37.4946 18.3724C36.942 18.0224 36.49 17.5808 36.1386 17.0476C35.7868 16.5143 35.6111 15.8394 35.6111 15.0229C35.6111 14.1563 35.854 13.3981 36.3394 12.7482C36.8417 12.0816 37.5363 11.565 38.4237 11.1984C39.3108 10.8318 40.3323 10.6485 41.4871 10.6485C41.8891 10.6485 42.3077 10.6735 42.7428 10.7235C43.178 10.7735 43.5966 10.8484 43.9986 10.9484C44.4003 11.0484 44.7517 11.1651 45.0531 11.2984L45.3043 14.7729L43.8728 14.8729L43.1194 12.5482C42.5671 12.2482 41.9394 12.0983 41.2363 12.0983C40.4828 12.0983 39.8717 12.2816 39.4031 12.6482C38.9511 13.0148 38.7251 13.5147 38.7251 14.148C38.7251 14.7146 38.9008 15.1895 39.2523 15.5728C39.604 15.9394 40.056 16.2643 40.6083 16.5476C41.1774 16.8143 41.772 17.0809 42.3914 17.3475C43.0274 17.5975 43.6217 17.8974 44.1743 18.2474C44.7434 18.5807 45.2037 19.0056 45.5554 19.5222C45.9068 20.0388 46.0826 20.6887 46.0826 21.4719C46.0826 22.3051 45.8317 23.055 45.3294 23.7216C44.8271 24.3715 44.124 24.8881 43.22 25.2714C42.316 25.638 41.2697 25.8213 40.0811 25.8213ZM56.516 25.5963L56.4408 24.4465L57.822 24.1965C57.7046 24.0132 57.5874 23.8383 57.4703 23.6716C57.3531 23.4883 57.1774 23.255 56.9428 22.9717L53.578 19.0223H52.5734V17.9224L53.7286 17.6725L58.9017 12.3732L57.3197 12.0733L57.3948 10.9234H62.7688L62.8443 12.1233L61.2623 12.3732L55.5617 17.5475V16.5726L60.3831 22.1968C60.7348 22.5968 61.0194 22.9301 61.2371 23.1967C61.4714 23.4633 61.664 23.6716 61.8146 23.8216C61.9654 23.9716 62.0826 24.0966 62.1663 24.1965L63.4468 24.4215V25.5963H56.516ZM48.4051 25.5963L48.3297 24.4465L49.9117 24.0716C49.9451 23.9549 49.9703 23.5633 49.9871 22.8967C50.0037 22.2135 50.0123 21.3386 50.0123 20.2721V16.2727C50.0123 15.5561 50.0037 14.9229 49.9871 14.3729C49.9703 13.823 49.9537 13.3814 49.9368 13.0481C49.92 12.7148 49.8948 12.5149 49.8614 12.4482L48.2794 12.0733L48.3548 10.9234H54.6326L54.708 12.0733L53.126 12.4482C53.0926 12.5149 53.0591 12.7148 53.0254 13.0481C53.0088 13.3814 52.992 13.823 52.9754 14.3729C52.9754 14.9229 52.9754 15.5561 52.9754 16.2727V20.2721C52.9754 21.3386 52.9837 22.2135 53.0006 22.8967C53.034 23.5633 53.0591 23.9549 53.0757 24.0716L54.4568 24.4465L54.3817 25.5963H48.4051ZM64.84 10.9234H69.8123L75.0606 22.2968H74.4326L79.3043 10.9234H84.1508L84.2263 12.0733L82.6443 12.4232C82.6274 12.5899 82.6274 12.9481 82.6443 13.4981C82.6608 14.048 82.6777 14.7646 82.6943 15.6478L82.8451 20.0971C82.8786 20.8304 82.9037 21.4802 82.9203 22.0468C82.954 22.5968 82.9791 23.0467 82.9957 23.3966C83.0291 23.7299 83.0543 23.9549 83.0711 24.0716L84.6531 24.4465L84.5777 25.5963H78.2497L78.1743 24.4465L79.7563 24.0716C79.7731 23.9882 79.7814 23.8049 79.7814 23.5216C79.7983 23.2217 79.8065 22.8051 79.8065 22.2718C79.8065 21.7219 79.7983 21.047 79.7814 20.2471L79.706 11.6483H80.6854L74.6837 25.6713H73.3528L66.824 11.6483H68.0543L68.0794 20.1971C68.0794 21.5136 68.0877 22.4551 68.1045 23.0217C68.1214 23.5883 68.138 23.9382 68.1548 24.0716L69.8874 24.4465L69.8123 25.5963H64.4886L64.4131 24.4465L66.146 24.0716C66.1626 23.9549 66.1794 23.7299 66.196 23.3966C66.2128 23.0467 66.2297 22.6218 66.2463 22.1218C66.2631 21.6219 66.2714 21.0803 66.2714 20.4971L66.3468 15.6978C66.3634 14.7646 66.3634 14.048 66.3468 13.5481C66.3468 13.0315 66.3468 12.6648 66.3468 12.4482L64.7648 12.0733L64.84 10.9234ZM86.0714 25.5963L85.996 24.4465L87.2768 24.0716L92.3994 11.5484L94.2828 10.4735L99.9583 24.0716L101.239 24.4465L101.163 25.5963H95.0111L94.9357 24.4465L96.5177 24.0716L95.1117 20.672L94.8354 19.8472L92.2488 13.6481L92.9268 13.6731L90.6668 19.7972L90.4157 20.5471L89.1851 24.0716L90.7674 24.4465L90.692 25.5963H86.0714ZM89.8883 21.222V19.6472C90.2066 19.6638 90.5914 19.6888 91.0434 19.7222C91.5123 19.7388 92.1066 19.7472 92.8266 19.7472C93.5297 19.7472 94.1154 19.7388 94.5843 19.7222C95.0697 19.6888 95.4631 19.6638 95.7645 19.6472V21.197C95.3628 21.197 94.9191 21.1886 94.4337 21.172C93.9648 21.1553 93.4291 21.147 92.8266 21.147C92.2237 21.147 91.688 21.1553 91.2194 21.172C90.7505 21.1886 90.3068 21.2053 89.8883 21.222ZM107.202 25.8213C106.483 25.8213 105.712 25.7297 104.892 25.5463C104.072 25.3464 103.377 25.0881 102.808 24.7715L102.682 21.222L104.114 21.122L104.917 23.5716C105.302 23.8216 105.729 24.0132 106.198 24.1465C106.667 24.2632 107.119 24.3215 107.554 24.3215C108.341 24.3215 108.943 24.1549 109.362 23.8216C109.797 23.4716 110.015 23.005 110.015 22.4218C110.015 21.8385 109.839 21.3636 109.487 20.997C109.136 20.6304 108.684 20.3138 108.131 20.0471C107.579 19.7805 106.993 19.5222 106.374 19.2723C105.754 19.0223 105.168 18.7223 104.616 18.3724C104.063 18.0224 103.611 17.5808 103.26 17.0476C102.908 16.5143 102.733 15.8394 102.733 15.0229C102.733 14.1563 102.975 13.3981 103.461 12.7482C103.963 12.0816 104.658 11.565 105.545 11.1984C106.432 10.8318 107.453 10.6485 108.609 10.6485C109.01 10.6485 109.429 10.6735 109.864 10.7235C110.299 10.7735 110.718 10.8484 111.12 10.9484C111.521 11.0484 111.873 11.1651 112.175 11.2984L112.425 14.7729L110.994 14.8729L110.241 12.5482C109.688 12.2482 109.061 12.0983 108.357 12.0983C107.604 12.0983 106.993 12.2816 106.524 12.6482C106.072 13.0148 105.846 13.5147 105.846 14.148C105.846 14.7146 106.022 15.1895 106.374 15.5728C106.725 15.9394 107.177 16.2643 107.73 16.5476C108.299 16.8143 108.893 17.0809 109.513 17.3475C110.149 17.5975 110.743 17.8974 111.295 18.2474C111.865 18.5807 112.325 19.0056 112.677 19.5222C113.028 20.0388 113.204 20.6887 113.204 21.4719C113.204 22.3051 112.953 23.055 112.451 23.7216C111.949 24.3715 111.245 24.8881 110.341 25.2714C109.437 25.638 108.391 25.8213 107.202 25.8213ZM128.132 10.7985L128.71 15.0978L127.304 15.2228L126.299 12.3732C126.115 12.3399 125.931 12.3232 125.747 12.3232C125.579 12.3066 125.403 12.2982 125.219 12.2982H124.341C124.19 12.2982 123.997 12.2982 123.763 12.2982C123.545 12.2982 123.369 12.3149 123.236 12.3482C123.236 12.4649 123.227 12.7732 123.211 13.2731C123.211 13.773 123.202 14.3729 123.185 15.0728C123.185 15.7561 123.185 16.4476 123.185 17.1476V19.8222C123.185 20.7887 123.194 21.6552 123.211 22.4218C123.227 23.1883 123.244 23.7383 123.261 24.0716L125.42 24.3965L125.345 25.5963H118.012L117.937 24.3965L120.097 24.0716C120.113 23.7383 120.13 23.1883 120.147 22.4218C120.164 21.6552 120.172 20.7887 120.172 19.8222V17.1476C120.172 16.4476 120.164 15.7561 120.147 15.0728C120.147 14.3729 120.147 13.773 120.147 13.2731C120.147 12.7732 120.139 12.4649 120.122 12.3482C119.988 12.3149 119.812 12.2982 119.594 12.2982C119.377 12.2982 119.184 12.2982 119.017 12.2982H118.113C117.929 12.2982 117.745 12.3066 117.56 12.3232C117.376 12.3232 117.192 12.3399 117.008 12.3732L116.029 15.2728L114.622 15.1228L115.15 10.7985C115.334 10.8151 115.56 10.8318 115.828 10.8484C116.095 10.8484 116.38 10.8568 116.681 10.8734C116.983 10.8901 117.276 10.9068 117.56 10.9234C117.845 10.9234 118.096 10.9234 118.314 10.9234H124.968C125.186 10.9234 125.437 10.9234 125.722 10.9234C126.006 10.9068 126.299 10.8901 126.601 10.8734C126.902 10.8568 127.187 10.8484 127.454 10.8484C127.722 10.8318 127.948 10.8151 128.132 10.7985ZM142.333 25.7463C141.881 25.6963 141.361 25.6547 140.775 25.6213C140.206 25.6047 139.687 25.5963 139.219 25.5963H130.58L130.505 24.4465L132.087 24.0716C132.121 23.9882 132.145 23.7799 132.162 23.4466C132.196 23.1133 132.221 22.6801 132.238 22.1468C132.254 21.5969 132.263 20.972 132.263 20.2721V16.2727C132.263 15.5561 132.254 14.9229 132.238 14.3729C132.221 13.823 132.196 13.3814 132.162 13.0481C132.145 12.7148 132.121 12.5149 132.087 12.4482L130.505 12.0733L130.58 10.9234H138.44C138.741 10.9234 139.093 10.9234 139.495 10.9234C139.913 10.9068 140.323 10.8901 140.725 10.8734C141.144 10.8401 141.504 10.8151 141.805 10.7985L142.408 14.3729L141.077 14.5479L140.173 12.3982C139.972 12.3649 139.788 12.3399 139.621 12.3232C139.453 12.3066 139.269 12.2982 139.068 12.2982H136.858C136.54 12.2982 136.239 12.3066 135.954 12.3232C135.686 12.3232 135.452 12.3399 135.251 12.3732C135.251 12.4732 135.243 12.6648 135.226 12.9481C135.226 13.2314 135.217 13.5814 135.201 13.998C135.201 14.4146 135.201 14.8729 135.201 15.3728V21.122C135.201 21.5886 135.201 22.0218 135.201 22.4218C135.217 22.8051 135.226 23.1383 135.226 23.4216C135.243 23.6883 135.251 23.8882 135.251 24.0216C135.536 24.0549 135.829 24.0799 136.13 24.0966C136.431 24.1132 136.808 24.1216 137.26 24.1216H138.967C139.369 24.1216 139.679 24.1216 139.897 24.1216C140.114 24.1049 140.282 24.0882 140.399 24.0716C140.516 24.0549 140.633 24.0382 140.751 24.0216L142.107 21.5719L143.437 21.8219L142.333 25.7463ZM139.269 20.5471L139.018 18.8723C138.901 18.8556 138.725 18.839 138.49 18.8223C138.256 18.8056 137.98 18.7973 137.662 18.7973H136.155C135.887 18.7973 135.619 18.8056 135.351 18.8223C135.1 18.839 134.883 18.8556 134.699 18.8723V17.2475C134.883 17.2642 135.1 17.2809 135.351 17.2975C135.619 17.2975 135.887 17.2975 136.155 17.2975H137.662C137.98 17.2975 138.256 17.2975 138.49 17.2975C138.725 17.2809 138.901 17.2725 139.018 17.2725L139.269 15.5728H140.549V20.5471H139.269ZM145.584 25.5963L145.509 24.4465L147.091 24.0466C147.091 23.9466 147.091 23.7633 147.091 23.4966C147.107 23.2133 147.116 22.8884 147.116 22.5218C147.133 22.1552 147.141 21.7802 147.141 21.3969C147.158 20.997 147.166 20.6221 147.166 20.2721V16.2727C147.166 15.5561 147.158 14.9229 147.141 14.3729C147.124 13.823 147.099 13.3814 147.065 13.0481C147.049 12.7148 147.024 12.5149 146.99 12.4482L145.408 12.0733L145.483 10.9234H151.661C153.469 10.9234 154.817 11.2317 155.704 11.8483C156.591 12.4482 157.035 13.3814 157.035 14.6479C157.035 15.4645 156.792 16.1977 156.307 16.8476C155.821 17.4808 155.151 17.9808 154.298 18.3474C153.444 18.714 152.465 18.8973 151.36 18.8973H149.828V17.5725H150.983C151.87 17.5725 152.582 17.3142 153.117 16.7976C153.653 16.281 153.921 15.5895 153.921 14.7229C153.921 13.9063 153.695 13.2898 153.243 12.8732C152.791 12.4399 152.138 12.2232 151.284 12.2232H150.154C150.137 12.2732 150.121 12.3899 150.104 12.5732C150.104 12.7565 150.104 13.0065 150.104 13.3231C150.104 13.6397 150.104 14.023 150.104 14.4729C150.104 14.9062 150.104 15.4145 150.104 15.9977V20.2721C150.104 20.8054 150.104 21.3303 150.104 21.8469C150.121 22.3635 150.137 22.8217 150.154 23.2217C150.188 23.6049 150.213 23.8799 150.23 24.0466L151.661 24.4465L151.586 25.5963H145.584ZM158.29 25.8713C157.42 25.8713 156.641 25.7297 155.955 25.4464C155.285 25.1464 154.666 24.6798 154.097 24.0466C153.544 23.4133 153.009 22.5884 152.49 21.5719L150.983 18.4974L153.444 17.9224L156.332 22.0218C156.733 22.5718 157.11 23.03 157.462 23.3966C157.813 23.7466 158.173 24.0216 158.541 24.2215C158.91 24.4215 159.303 24.5715 159.722 24.6715L159.697 25.7463C159.462 25.7963 159.228 25.8296 158.993 25.8463C158.759 25.863 158.525 25.8713 158.29 25.8713Z"
                        fill="white" />
                    <path d="M159.714 1.99084H0.285706V1.91927e-05H159.714V1.99084Z" fill="white" />
                    <path d="M13.7143 5.68805H24.2857L17.9118 8.43317L13.7143 26.7339V5.68805Z" fill="white" />
                    <path d="M10.5714 5.68805H0L6.37394 8.43317L10.5714 26.7339V5.68805Z" fill="white" />
                </g>
                <defs>
                    <clipPath id="clip0_35_44">
                        <rect width="160" height="31" fill="white" />
                    </clipPath>
                </defs>
            </svg>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar"
            aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        @auth

            <div class="collapse navbar-collapse" id="textoNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('') ?>/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('/task') ?>">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('/ranking') ?>">Ranking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('/profile') ?>">Profile</a>
                    </li>

                </ul>
                <a class=" ml-auto btn btn-primary " href="<?= url('/logout') ?>">logout</a>
            </div>
        @else
            <div class="collapse navbar-collapse justify-content-end" id="textoNavbar">
                <form class="d-flex" action=<?= url('/login') ?> method="POST">
                    @csrf

                    <input class="form-control mr-2" type="text" id="name" name="name" placeholder="Nome">
                    <input class="form-control mr-2" type="password" id="password" name="password" placeholder="Senha">
                    <input class="btn btn-primary" type="submit" value="Entrar" class="buttom-primary">
                </form>

            </div>
        @endauth

    </nav>
</header>

<body style="background-color: #140920;">
