<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/svg+xml" href="/vite.svg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Car Experts</title>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap" rel="stylesheet">--}}
    <!--    <link rel="stylesheet" href="style/style.sass">-->
    {{--
    <script type="module" crossorigin src="{{url('/storage/assets/index.a2dc5af3.js') }}"></script>
    --}}
    <style>

        body, * {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 24px;
            line-height: 110%;
            letter-spacing: -.02em
        }

        * {
            box-sizing: border-box
        }

        section {
            padding-top: 80px

        }

        .container {
            width: 1800px !important;
            padding: 0 50px;
            margin: auto;
            /*width: 1440px;*/
            /*max-width: 95vw*/
        }

        .container:after {
            content: " ";
            display: block;
            height: 0;
            clear: both;
        }

        h1, .h1 {
            font-size: 70px;
            line-height: 110%;

            margin-bottom: 60px
        }

        h2, .h2 {
            font-size: 48px;
            line-height: 110%;

            margin-bottom: 60px
        }

        h3, .h3 {
            font-size: 14px;
            line-height: 110%;
            font-weight: 400;
            text-transform: uppercase
        }

        .accent {
            font-size: 30px;
        }

        .link {
            display: inline-block;
            color: #222;
            text-decoration: none;
            cursor: pointer
        }

        .link:hover {
            text-decoration: underline
        }

        .btn {
            padding: 15px 95px;
            border: 1px #222222 solid;
            border-radius: 6px;

            font-size: 30px
        }

        .hidden {
            display: none !important
        }

        .header {
            padding-top: 30px
        }

        .header__container {
            /*display: flex;*/
            /*justify-content: space-between;*/
            /*align-items: flex-end*/
        }

        .header__contacts {
            margin: 0 30px 5px auto;
            display: flex;
            gap: 30px;
            font-size: 28px;
            line-height: 120%
        }

        .header__date {
            margin: 0 0 5px;
            text-align: right;
            min-width: 215px
        }

        .header__date .date__title {
            font-size: 20px;
            line-height: 110%;
            margin-bottom: 4px
        }

        .header__qr-text {
            font-size: 18px;
            color: #22222299;
            opacity: 1;
            width: 175px;
            float: right;
            margin-right: 40px;
        }

        .overview {
            padding-top: 0;
        }

        .overview__content {
            /*display: flex;*/
            /*gap: 30px;*/
            width: 100%
        }

        .overview__left {
            width: 490px;
        }

        .overview__logo {
            margin-right: 30px;
            width: 200px;
            height: 200px;
            border: 1px rgba(0, 0, 0, .1) solid;
            border-radius: 6px
        }

        .overview__logo img {
            margin: 40px;
            width: 120px;
            height: 120px;
        }

        .overview__name {
            margin-right: 40px;
            max-width: 215px;
            font-size: 30px;
            line-height: 30px;
        }

        .overview__divider {
            height: 215px;
            border-right: 1px #222222 solid;
            opacity: .1
        }

        .overview__divider.right {
            margin-right: 20px;
        }

        .overview__divider::after {

            content: " ";
            display: table;
            clear: both;
        }

        .overview__equipment {
            /*width: 800px;*/
            margin-left: 50px;
        }

        .overview__right {
            width: 1100px;
        }

        .overview__equipment .equipment__title {
            font-size: 20px;
            text-transform: uppercase;
            margin-bottom: 30px
        }

        .overview__equipment .equipment__grid {
            /*display: grid;*/
            /*grid-template-columns:repeat(auto-fill, minmax(200px, 1fr));*/
            /*row-gap: 25px;*/
            font-size: 16px;
            color: #444;
            max-width: 1400px
        }

        .overview__equipment tr {
            padding-bottom: 30px;
        }

        .overview__equipment .equipment__item {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .overview__addition {
            margin-right: -250px;
        }

        .overview__addition .addition__item {
            margin-top: 30px;
            font-size: 16px;
            line-height: 110%;
            /*width: 200px;*/
        }

        .technical__table tr td {
            padding: 30px 40px;
            border: 1px rgba(0, 0, 0, .1) solid
        }

        .technical__table {
            width: 100%;
            border-collapse: collapse;
            border-top: none;
            border-bottom: none;
        }

        .technical__table tr:first-child td {
            border-top: none
        }

        .nbt, .nbt * {
            border-top: none !important
        }


        .nbb, .nbb * {
            border-bottom: none !important
        }

        .technical__table tr:last-child td {
            border-bottom: none !important
        }


        .technical__table tr td:first-child {
            padding-left: 0;
            border-left: none
        }

        .technical__table tr td:last-child {
            border-right: none
        }

        .technical__title {
            margin-bottom: 20px;
            font-size: 20px;
            text-transform: uppercase
        }

        .technical__value {
            font-size: 30px
        }

        .condition__content {
        }

        .condition__side {
            position: relative;
            width: 420px;
            display: inline-block;
            transform: scale(1.3);
            margin-right: 120px;
        }


        .condition__side img {
            width: 100%;
        }

        .condition__icon {
            position: absolute
        }

        .condition__measurement {
            /*margin: -25px 60px 0;*/
            /*display: flex;*/
            /*gap: 20px*/
            float: right;
            position: relative;
            right: -100px;
            margin-right: -100px;
        }

        .condition__measurement > * {
            display: inline-block;
        }

        .condition__measurement .measurement__values {
            width: 15px;
            height: 80%;
            border-radius: 100px;

            /*background: linear-gradient(180deg, #CA120C 0%, #F70800 23.44%, #F7AD08 49.48%, #F2F708 75%, rgba(255, 255, 255, 0) 100%)*/
        }

        .condition__measurement .measurement__values img {
            height: 100%;
        }

        .condition__measurement .measurement__titles {

            display: inline-block;
            margin-left: 25px;
            position: relative;
            top: -60px;
        }

        .condition__measurement .measurement__titles .titles__item {
            margin-bottom: 60px;
            /*display: flex;*/
            /*flex-direction: column;*/
            /*justify-content: space-between*/
        }

        .condition__measurement .measurement__titles .titles__item:last-child {
            margin-bottom: 0;
        }

        .recommendation .h2 {
            margin-bottom: 50px !important;
        }

        .recommendation__text {
            font-size: 24px;
        }

        .recommendation__text p:last-child {
            margin-bottom: 0
        }

        .recommendation-left {
            max-width: 60%;
        }

        .recommendation__cost {
            /*display: flex;*/
            /*flex-direction: column;*/
            /*justify-content: center;*/
            margin-left: 150px;
            padding: 27px 150px;
            background-color: #f9f9f9;
            border-radius: 6px;
            text-align: center
        }

        .recommendation__cost .h3 {
            margin-top: 35px;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .report .h1 {
            display: flex;
            align-items: center
        }

        .report__divider {
            display: inline-block;
            margin: 0 30px;
            height: 80px;
            border-right: 1px rgba(0, 0, 0, .1) solid
        }

        .report__title {
            transition: .3s ease-in-out
        }

        .report__title.not-active {
            font-size: 50px;
            text-decoration: underline
        }

        .report__type.not-active {
            display: none
        }

        .report__video video {
            width: 100%;
            height: 1015px;
            object-fit: cover
        }

        .report__slider.slider-for {
            margin-bottom: 35px
        }

        .report__slider.slider-for .slide {
            display: flex;
            gap: 60px
        }

        .report__slider.slider-for .slide__image {
            width: 920px;
            height: 610px;
            overflow: hidden;
            border-radius: 6px
        }

        .report__slider.slider-for .slide__image img {
            width: 100%;
            height: auto
        }

        .report__slider.slider-for .slide__content {
            height: 100%;
            /*max-width: 30%*/
            /*padding-left: 40px;*/
        }

        .slide__content {
            padding-left: 50px;
            vertical-align: top;
        }

        .report__slider.slider-nav {
            min-height: 320px
        }

        .report__slider.slider-nav .slick-track {
            display: flex;
            align-items: center
        }

        .report__slider.slider-nav .slick-list {
            padding: 25px 0 !important
        }

        .report__slider.slider-nav .slide {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 320px
        }

        .report__slider.slider-nav .slide.slick-center + .slide .slide__image-wrapper:after {
            background: linear-gradient(270deg, #FFFFFF -21.6%, rgba(255, 255, 255, 0) 50%)
        }

        .report__slider.slider-nav .slide .slide__image-wrapper {
            position: relative;
            width: 460px;
            height: 310px;
            transition: .3s ease-in-out;
            border-radius: 6px;
            overflow: hidden
        }

        .report__slider.slider-nav .slide .slide__image-wrapper img {
            width: 100%;
            height: auto
        }

        .report__slider.slider-nav .slide .slide__image-wrapper:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transition: .3s ease-in-out;
            background: linear-gradient(90deg, #FFFFFF -21.75%, rgba(255, 255, 255, 0) 50%)
        }

        .report__slider.slider-nav .slide.slick-center .slide__image-wrapper {
            filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, .15))
        }

        .report__slider.slider-nav .slide.slick-center .slide__image-wrapper:after {
            display: none
        }

        .report__slider.slider-nav .slide.slide:not(.slick-center) .slide__image-wrapper {
            width: 338px;
            height: 225px
        }

        .report__slider.slider-nav .arrow {
            position: absolute;
            top: 42%;
            width: 50px;
            height: 50px;
            background-size: contain;
            z-index: 10
        }

        .report__slider.slider-nav .arrow.arrow-next {
            right: 0;
            background-image: url('/storage/assets/img/arrow-right.svg')
        }

        .report__slider.slider-nav .arrow.arrow-prev {
            background-image: url('/storage/assets/img/arrow-left.svg')
        }


        .report .photo__line img:first-child {
            margin-right: 50px;
        }

        .photo__line img {
            max-width: 95%;
        }

        .components {
            padding-top: 0;
        }

        .components .flex {
            flex-wrap: wrap;
            gap: 30px;

        }

        .components table {
            width: 100%;
        }

        .components .grid {
            display: grid;
            grid-template-columns:1fr 1fr;
            gap: 30px
        }

        .components__item {
            position: relative;
            width: 730px;
            border-radius: 6px;
            /*overflow: hidden*/
        }

        .components__item .item__image:first-child {
            padding-right: 20px;
        }

        .components__item .item__image:last-child {
            padding-left: 20px;
        }

        .components__item .item__image {
            max-width: 705px;
            max-height: 100%;

            /*width: 705px;*/
            /*width: 100%;*/
            object-fit: cover;
            /*height: 470px*/
        }

        .components__item .item__text {
            position: relative;
            left: 20px;
            bottom: 00px;
            /*margin-bottom: 0;*/
            color: #000
        }

        .components__item .item__desc {
            margin-top: 30px
        }

        .footer {
            margin-top: 120px;
            position: relative;
        }

        .footer .header__container {
            padding: 100px 0 50px;
            border-top: 1px rgba(0, 0, 0, .1) solid;
        }

        .footer .header__logo {
            width: 160px;

            vertical-align: top;
            padding-top: 35px;
        }

        .footer {
            width: 100%;
        }


        .footer .header__logo::after {
            content: " ";
            display: table;
            clear: both;
            height: 0;
            width: fit-content;
            margin-left: 30px;
        }

        .footer .footer__container {
            gap: 30px;
            align-items: flex-end;
            padding-bottom: 120px
        }

        .footer__qr {
            border-radius: 20px 0;
            padding: 15px;
            border: 1px solid black;
            width: 140px !important;
        }

        .footer__date {
            text-align: left
        }

        .footer__btn {
            margin-left: auto
        }

        .no-trash {
            margin: 200px 0
        }

        .no-trash .h1 {
            text-align: center
        }

        .no-trash__like {
            display: block;
            width: fit-content;
            margin: 0 auto
        }
    </style>

    <style>

        .header__logo, .header__logo img {
            max-height: 87px;
        }

        .flex > * {
            display: inline-block;
        }

        .header__right {
            float: right;
        }

        .header__logo {
            float: left;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .overview__content {
            min-height: 200px;
            /*margin-bottom: 100px;*/
        }

        .equipment__item-2 {
            padding-right: 30px;
            height: 30px;
            /*max-width: 230px;*/
            font-size: 16px;
            width: 315px;
            line-height: 110%;
            padding-bottom: 20px;

        }


        .equipment__item-2 > span {
            padding: 17px 0;
            font-size: 20px;
            /*display: inline-block;*/
        }

        /*.equipment__item-2 > span:nth-child(2){*/
        /*    width: 85%;*/
        /*}*/


        .equipment__item-2 img {
            height: 30px;
            width: 30px;
            margin-bottom: -5px;
        }


        .condition {
            height: 570px;
        }

        .condition__photos {
            width: 1300px;
        }

        .report__photo > * {
            margin-bottom: 60px;
        }

        .photo__with-comment {
            width: 100%;
            margin-bottom: 60px;
        }

        .photo__with-comment:after {
            /*content: " ";*/
            /*display: table;*/
            /*clear: both;*/
            /*height: 0;*/
        }

        .photo__with-comment img {
            width: 100%;
            /*width: 900px;*/
            /*height: 600px;*/
            /*object-fit: cover;*/
        }

        .photo__with-comment .right {
            /*max-width: 500px;*/
        }

        .photo__with-comment .h2 {
            margin-bottom: 30px;
        }

        .photo__line > img {
            display: inline-block;

        }

        .photo__line > img:first-child {
            margin-right: 40px;
        }

        .photo__comment, .photo__with-comment {
            margin-bottom: 40px;
        }

        .photo__comment > * {
        }

        .photo__comment .h2 {
            margin-right: 40px
        }

        .photo__comment * {
            width: 100% !important;
        }

        .footer .contacts__link {
            font-size: 30px;
            margin-left: 100px;
            white-space: nowrap;
            position: relative;
            line-height: 38px;
            vertical-align: bottom;
            margin-top: 5px;
        }

        .footer .header__date {
            height: 110px;
            width: 160px;
            text-align: left;
            font-size: 30px;
        }

        .footer .date__date {
            margin-bottom: 40px;
        }

        .footer .header__qr-text {
            margin-left: auto;
            margin-right: 10px;
            width: 190px !important;
        }

        .page-break {
            page-break-after: always;
        }

        .footer {
            position: absolute;
            bottom: 10px;
        }


        .header__qr {
            border-radius: 20px 0;
            padding: 15px;
            border: 1px solid black;
        }

        h1 {
            font-weight: 400 !important;
            font-size: 120px !important;
            line-height: 132px !important;
            letter-spacing: -0.02em !important;
            text-align: left;

        }

        .mw960 {
            max-width: 1500px;
        }

        .brakes {
            padding-top: 100px;
        }

        .brakes table {
            width: 100%;
        }

        .brakes td {
            padding-bottom: 25px;
        }


        .image-color {
            width: 34px;
            height: 34px;
            position: absolute;
        }

        .image-color.bonner {
            left: 150px;
            bottom: 450px;
            width: 34px;
            height: 34px;
        }

        .image-color.bonner img {
            width: 34px;
            height: 34px;
        }

        .condition__value {

            position: absolute;
            width: 20px;
            height: 28px;

            max-width: 20px;
            max-height: 28px;
        }

        .condition__value img {

            width: 20px;
            height: 28px;
        }

        .condition__value.bonnet {

            top: 70px;
            left: 67px;
            display: block;

        }

    </style>

    <style>
        .tires-text {
            font-size: 22px;
            text-align: center;
            width: 100%;
        }

        .page-number {
            position: absolute;
            bottom: 15px;
            right: 15px;
            font-size: 16px;
            color: #222;
        }

        .page-number::after {
            content: counter(page);
            font-size: 16px;
        }

        .report table {
            width: 100%;
        }

        img {
            max-height: 630px;
            object-fit: cover;
        }

        .report table img.big {
            max-height: 800px !important;
        }

        .report table td {
            padding-bottom: 30px;
        }

        .report table img {
            height: 100%;
            margin-bottom: 25px;
        }

        .tires-chars {
            margin: 0 30px 0;
            vertical-align: top;

        }

        .tires-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }

        .tires-chars__box {
            display: flex;
            gap: 16px;

        }

        .tires-chars__text * {
            display: inline-block;
            position: relative;
        }

        .tires-chars__text-text {
            display: block;
            position: absolute;
            bottom: 18px;
            padding-bottom: 7px;
            height: 30px;
            margin-top: -10px;
            font-size: 30px;
            text-transform: uppercase;
        }

        .tires-chars__box {
            width: 30px;
            height: 30px;
            min-width: 30px;
            min-height: 30px;
            max-width: 30px;
            max-height: 30px;
            display: block;
            place-items: center;
            border: 1px solid #000000;
            border-radius: 4px;
            padding: 15px 5px 0;
            text-align: center;
            vertical-align: center;
            margin-right: 7px;
        }

        .tires-line {
            border-bottom: 1px solid #222;
            width: 215px;
            margin: 20px 0;
        }

        .tires-photo img {
            width: 100%;
        }

        .components__item .item__image {

            object-fit: cover;
        }

        .tires-chars__title {
            text-transform: uppercase;
            font-size: 20px;
        }

        .tires-chars__title-br {
            height: 25px;
        }

        .condition__value img {
            max-width: 20px;
            max-height: 28px;
            width: 20px;
            height: 28px;
            object-fit: contain;
        }

        .condition__side .Hood {
            top: 112px;
            left: 96px;
        }

        .condition__side .Back-cover {
            top: 82px;
            left: 90px;
        }

        .condition__side .Front-left-door {
            top: 130px;
            left: 245px;
        }

        .condition__side .Front-right-door {
            top: 112px;
            right: 80px;
        }

        .condition__side .Left-rear-door {
            top: 118px;
            left: 298px;
        }

        .condition__side .Right-rear-door {
            top: 112px;
            left: 264px;
        }

        .condition__side .Left-front-wing {
            top: 130px;
            left: 195px;
        }

        .condition__side .Right-front-wing {
            top: 107px;
            right: 35px;
        }

        .condition__side .Left-rear-wing {
            top: 94px;
            right: 44px;
        }

        .condition__side .Right-rear-wing {
            top: 93px;
            left: 185px;
        }

        .condition__side .Left-front-rack {
            top: 71px;
            left: 235px;
        }

        .condition__side .Right-front-rack {
            top: 61px;
            right: 93px;
        }

        .condition__side .Left-rear-rack {
            top: 72px;
            right: 80px;
        }

        .condition__side .Right-rear-rack {
            top: 65px;
            left: 223px;
        }

        .condition__side .Left-middle-rack {
            top: 73px;
            left: 271px;
        }

        .condition__side .Right-middle-rack {
            top: 64px;
            right: 126px;
        }

        .condition__side .Roof {
            top: 50px;
            left: 212px;
        }

        .condition__side .Mirrors {
            top: 82px;
            left: 118px;
        }

        .condition__side .Front-bumper {
            top: 166px;
            left: 78px;
        }

        .condition__side .Rear-bumper {
            top: 125px;
            left: 90px;
        }

        .condition__side-front .Back-cover,
        .condition__side-front .Front-right-door,
        .condition__side-front .Right-rear-door,
        .condition__side-front .Right-front-wing,
        .condition__side-front .Right-rear-wing,
        .condition__side-front .Right-front-rack,
        .condition__side-front .Right-rear-rack,
        .condition__side-front .Right-middle-rack,
        .condition__side-front .Rear-bumper {
            display: none;
        }

        .condition__side-back .Hood,
        .condition__side-back .Front-left-door,
        .condition__side-back .Left-rear-door,
        .condition__side-back .Left-front-wing,
        .condition__side-back .Left-rear-wing,
        .condition__side-back .Left-front-rack,
        .condition__side-back .Left-rear-rack,
        .condition__side-back .Left-middle-rack,
        .condition__side-back .Roof,
        .condition__side-back .Mirrors,
        .condition__side-back .Front-bumper {
            display: none;
        }


        .tires-logo {
            width: 215px;
            height: 215px;
            border-radius: 6px;
            border: 1px solid #222;
            place-items: center;
            padding: 23px;
            margin-right: 15px;
            text-align: center;
            font-weight: 700;
            vertical-align: top;
        }

        .tires-logo img, .tires-logo .img {
            margin-left: 25px;
            margin-right: 25px;
        }

        .tires-logo img:first-child, .tires-logo .img:first-child {
            margin-top: 20px;
            margin-bottom: 15px;
        }

        .tires-logo img:nth-child(2), .tires-logo .img:nth-child(2) {
            margin-left: 45px;


        }

        .main-page {
            text-align: center;
        }

        .main-page * {
            text-align: center;
        }

        .main-page > * {
            width: 100%;
        }

        .main-page__date {
            position: absolute;
            bottom: 100px;
            font-size: 30px;
            color: #22222299;
        }

        .main-page__logo {
            margin: 437px auto 337px;
            width: 700px;
        }

        .main-page__logo img {
            width: 700px;
        }

        .main-page__pre-title {
            font-size: 30px;
            text-transform: uppercase;
        }

        .main-page__title {
            font-size: 120px;

            line-height: 115px;
            letter-spacing: -0.02em;
            text-align: center;

            margin: 80px 0 100px;
        }

        .main-page__img {
            width: 200px;
            height: 200px;
        }

        .main-page__img img {
            width: 200px;
            height: auto;
        }

        .footer .header__logo img {
            width: 100%;
        }

        .tires-components table {
            width: 100%;
        }

        /* Inline таблица стилей #6 | http://127.0.0.1:8000/EN/I9qHYeRDIC */

        .coupe-mode .condition__side .Hood {
            /* top: 128.766px; */
            /* left: 133.089px; */
            top: 106.8px;
            left: 111.1px;
        }

        .coupe-mode .condition__side .Roof {
            /* top: 44.101px; */
            /* left: 258.738px; */
            top: 40.1px;
            left: 236.7px;
        }

        .coupe-mode .condition__side .Front-left-door {
            /* top: 143.662px; */
            /* left: 292.526px; */
            top: 112.7px;
            left: 273.5px;
        }

        .coupe-mode .condition__side .Left-middle-rack {
            /* top: 78.883px; */
            /* left: 305.458px; */
            top: 60.9px;
            left: 294.5px;
        }

        .coupe-mode .condition__side .Back-cover {
            /* top: 116.934px; */
            top: 92.9px;
        }

        .coupe-mode .condition__side .Rear-bumper {
            /* top: 172.582px; */
            /* left: 51.314px; */
            top: 131.6px;
            left: 54.3px;
        }

        .coupe-mode .condition__side .Right-rear-rack {
            /* left: 191.7px; */
            left: 171.7px;
        }

        .coupe-mode .condition__side .Right-front-wing {
            /* top: 143.237px; */
            top: 110.2px;
        }

        .coupe-mode .condition__side .Right-front-rack {
            /* top: 85.253px; */
            top: 65.3px;
        }

        .coupe-mode .condition__side .Right-middle-rack {
            /* right: 175.244px; */
            right: 169.2px;
        }

        /* Inline таблица стилей #6 | http://127.0.0.1:8000/EN/I9qHYeRDIC */

        .crossover-mode .condition__side .Left-rear-rack {
            /* top: 87.545px; */
            /* right: 57.47px; */
            top: 70.545px;
            right: 66.47px;
        }

        .crossover-mode .condition__side .Rear-bumper {
            /* top: 196.017px; */
            top: 138.017px;
        }

        .crossover-mode .condition__side .Right-rear-rack {
            /* top: 76.086px; */
            /* left: 162.446px; */
            top: 55.086px;
            left: 194.446px;
        }


    </style>
</head>
<body>
<div class="main-page">
    <div class="main-page__logo">
        <img src="{{ url('/assets/LogoHeader.fccae26c.png') }}" alt="logo">
    </div>

    <div class="main-page__pre-title">
        ОТЧЕТ ОБ ОСМОТРЕ АВТОМОБИЛЯ
    </div>
    <div class="main-page__title">
        {{ $report->brand }} <br>
        {{ $report->model }}
    </div>

    <div class="main-page__img">
        <img
                src="{{ $report->brand_image ? url($report->brand_image) : '' }}"
                alt="car-logo">
    </div>

    <div class="main-page__date">

        @php


            $_monthsList = array("-01-" => "янв", "-02-" => "фев",
            "-03-" => "мар", "-04-" => "апр", "-05-" => "мая", "-06-" => "июн",
            "-07-" => "июл", "-08-" => "авг", "-09-" => "сен",
            "-10-" => "окт", "-11-" => "ноя", "-12-" => "дек");
            $_mD = date_create( (($report->updated_at  && $report->updated_at != $report->created_at) ? $report->updated_at : $report->created_at))->format('-m-');

            $currentDate =  date_create($report->updated_at)->format('d-m-Y');
            $currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);
        @endphp
        {{$currentDate}}

    </div>
    <div class="box"></div>
</div>

<div class="page-break"></div>
<header class="header">
    <div class="container header__container">
        <div class="header__logo">
            <img src="{{ url('/assets/LogoHeader.fccae26c.png') }}" alt="logo">
        </div>
        <div class="header__right">
            <div class="header__qr">
                <img
                        src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate('https://www.car-experts.ae/')) !!} ">
            </div>

        </div>
        <div class="header__qr-text">
            Отсканируйте QR-код,
            чтобы посмотреть наши
            контакты
        </div>
    </div>
</header>
<section class="overview">
    <div class="container">
        <h1 class="h1">Обзор автомобиля</h1>
        <div class="overview__content">
            <div class="overview__left left">
                <div class="overview__logo left">

                    <img
                            src="{{ $report->brand_image ? url($report->brand_image) : '' }}"

                            alt="car-logo">

                    {{--                    <img--}}
                    {{--                        src="{{'/assets/brands/'.strtolower(str_replace (' ', '-', $report->brand)).'-logo.png'}}"--}}

                    {{--                        alt="car-logo">--}}

                </div>
                <div class="overview__name right">
                    {{ $report->brand }} <br>
                    {{ $report->model }}
                </div>
            </div>
            <div class="overview__right right">
                <div class="overview__divider left"></div>
                <div class="overview__equipment left">
                    <div class="equipment__title h3">
                        Комплектация
                    </div>
                    <table class="equipment__grid">

                        @php

                            $equipmentItems = $report->equipment;

                        @endphp

                        @php
                            $equipmentItems = array_filter($report->equipment, function($item){
                              return $item;
                          });
                          $rows = ceil(count($equipmentItems)/4);
                            $equipmentKeys = array_keys($report->equipment);
                        @endphp


                        @php
                            $equipmentIco = [
        'tire_pressure_sensor' => '4G',
        'cruise_control' => 'cc',
        'adaptive_cruise_control' => 'cc',
        'parking_sensors' => '5E',
        'camera' => 'cam',
        'camera_360' => '360',
        'keyless_entry' => '4A',
        'sunroof' => '1C',
        'panoramic_roof' => 'pr',
        'steering_wheel_heating' => '4C',
        'third_seat_rows' => '3s',
        'electric_seats' => 'es',
        'seats_memory' => 'rs',
        'seats_heating' => 'hs',
        'seats_ventilation' => 'sv',
        'premium_audiosystem' => 'pa',
        'multimedia_system_rear_passengers' => 'mr',
        'android_auto_carplay' => 'aa',
        'seats_massage' => 'ms',
        'door_closers' => '4A',
        'adaptive_lights' => 'ab',
        'automatic_high_beam' => 'ahb',
        'electric_folding_mirrors' => '6E',
        'start_stop' => 'pts',
        'leather' => '6G',
        'virtual_dashboard' => 'pw',
        'windshield_projection' => 'pw',
        'hands_free_trunk_opening' => 'aot',
        'electric_trunk_lid' => 'aot',
        'multimedia_lcd_screen' => 'md',
        'sunroof' => 'hatch',
        'electric_folding_mirrors' => 'em',
        'power_steering' => '4H',
        'self_parking' => '4C',
        'autopilot' => '4C'
    ];
         $vocabulary = [
'tire_pressure_sensor' => 'Датчик давления в шинах',
'cruise_control' => 'Круиз-контроль',
'parking_sensors' => 'Парковочные датчики',
'camera' => 'Камера',
'start_stop' => 'Старт-стоп',
'leather' => 'Кожаный салон',
'third_seat_rows' => 'Третий ряд сидений',
'seats_heating' => 'Подогрев сидений',
'multimedia_lcd_screen' => 'Мультимедийный ЖК-экран',
'adaptive_cruise_control' => 'Адаптивный круиз-контроль',
'camera_360' => 'Камера 360',
'keyless_entry' => 'Бесключевой доступ',
'sunroof' => 'Люк',
'panoramic_roof' => 'Панорамная крыша',
'electric_seats' => 'Электрические сиденья',
'seats_memory' => 'Память сидений',
'steering_wheel_heating' => 'Подогрев руля',
'seats_ventilation' => 'Вентиляция сидений',
'android_auto_carplay' => 'Android Auto / CarPlay',
'electric_folding_mirrors' => 'Электрические складывающиеся зеркала',
'electric_trunk_lid' => 'Электрическая крышка багажника',
'virtual_dashboard' => 'Виртуальная приборная панель',
'power_steering' => 'Электропривод рулевой колонки',
'adaptive_lights' => 'Адаптивные фары',
'automatic_high_beam' => 'Автоматический дальний свет',
'autopilot' => 'Автопилот',
'self_parking' => 'Самопарковка',
'premium_seats_ventilation' => 'Мультимедийная система для задних пассажиров',
'seats_massage' => 'Массаж сидений',
'multimedia_system_rear_passengers' => 'Мультимедийная система для задних пассажиров',
'premium_audiosystem' => 'Премиум аудиосистема',
'windshield_projection' => 'Проекция на лобовое стекло',
'door_closers' => 'Доводчики дверей',

'adaptive_light' => 'Адаптивный свет', // added missing translation
    'digital_instrument_panel' => 'Цифровая приборная панель', // added missing translation
    'electric_seat_adjustment' => 'Регулировка сидений', // added missing translation
    'hands_free_trunk_opening' => 'Бесконтактное открытие багажника', // added missing translation
    'head_up_display' => 'Проекция на лобовое стекло', // added missing translation
    'leather_interior' => 'Кожаный интерьер', // added missing translation
    'navigation_system' => 'Навигационная система', // added missing translation
    'parking_assistance_system' => 'Система помощи при парковке', // added missing translation
    'power_outlet_220v' => 'Розетка 220V', // added missing translation
    'premium_audio_system' => 'Премиум аудиосистема', // added missing translation
    'rear_passenger_multimedia_system' => 'Мультимедийная система для задних пассажиров', // added missing translation
    'seat_massage' => 'Массаж сидений', // added missing translation
    'seat_position_memory' => 'Память положения сидений', // added missing translation
    'start_stop_system' => 'Система старт-стоп', // added missing translation
    'third_row_of_seats' => 'Третий ряд сидений', // added missing translation
    'ventilated_seats' => 'Вентилируемые сидения', // added missing translation
    'tow_hitch' => 'Фаркоп',

];
                        @endphp
                        @for($i = 0; $i < $rows; $i++)
                            <tr>
                                @for($j = 4 * $i; $j < 4 * ($i + 1); $j++)
                                    @if(isset($equipmentKeys[$j]))
                                        @php
                                            $key = $equipmentKeys[$j];
                                            $icon = isset($equipmentIco[$key]) ? $equipmentIco[$key] : 'no-icon';
                                        @endphp

                                        <td class="equipment__item-2">
                    <span class="">
                        <img src="{{url('/assets/icons/'.$icon.'.png')}}"/>
                    </span>
                                            <span class="">
                        {{$vocabulary[$key]}}
                    </span>
                                        </td>
                                    @endif
                                @endfor
                            </tr>
                        @endfor
                    </table>
                </div>

                {{--                <div class="overview__addition right">--}}
                {{--                    <div class="h3">--}}
                {{--                        Дополнительные опции--}}
                {{--                    </div>--}}
                {{--                    <div class="addition__item">--}}
                {{--                        <span class="">--}}
                {{--                            <img src="{{url('/storage/assets/massage.png') }}"--}}
                {{--                                 alt="icon">--}}
                {{--                        </span>--}}
                {{--                        <span class="">--}}
                {{--                            Массаж сидений--}}
                {{--                        </span>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="overview__divider  right"></div>--}}

            </div>
        </div>
    </div>
</section>
<br>
<br>
<section class="technical">
    <div class="container">
        <div class="h2">Технические характеристики</div>
        <table class="technical__table">
            <tr class="nbt">
                <td>
                    <div class="technical__title">
                        Год выпуска
                    </div>
                    <div class="technical__value">
                        {{ $report->year }}

                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Пробег
                    </div>
                    <div class="technical__value">
                        {{ number_format($report->mileage, 0, ' ', ' ') }} км

                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Двигатель
                    </div>
                    <div class="technical__value">
                        {{ $report->engine_volume }} л / {{ $report->engine_power }} л.с.
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Привод
                    </div>
                    <div class="technical__value">
                        {{ $report->drive }}
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        VIN
                    </div>
                    <div class="technical__value">
                        {{ strtoupper($report->vin) }}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="technical__title">
                        Цвет
                    </div>
                    <div class="technical__value">
                        {{ $report->body_color }}
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Коробка
                    </div>
                    <div class="technical__value">
                        {{ $report->gearbox }}
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        ДТП (база)
                    </div>
                    <div class="technical__value">
                        {{ $report->crashes ? 'Есть': 'Нет' }}

                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Спецификация
                    </div>
                    <div class="technical__value">
                        {{ $report->specification }}
                    </div>
                </td>
                <td>
                    <div class="technical__title">
                        Гарантия
                    </div>
                    <div class="technical__value">
                        {{ $report->guarantee_check ? 'До ' .$report->guarantee_month . ' / ' .$report->guarantee_year : 'Нет' }}
                    </div>
                </td>

            </tr>
        </table>
    </div>
</section>
<br>
<br>
<section class="condition">
    <div class="container">
        <div class="h2">Состояние кузова</div>
        <table class="condition__content container
                @if($report->body == 'купе')
                coupe-mode
@elseif($report->body == 'кроссовер')
                crossover-mode
@endif
                ">
            <tr>
                @php
                    $translate = [
                 'fenderfrontright' => 'Right-front-wing',
                 'fenderbackright' => 'Right-rear-wing',
                 'doorfrontright' => 'Front-right-door',
                 'doorbackright' => 'Right-rear-door',
                 'fenderfrontleft' => 'Left-front-wing',
                 'fenderbackleft' => 'Left-rear-wing',
                 'doorbackleft' => 'Left-rear-door',
                 'doorfrontleft' => 'Front-left-door',
                 'roof' => 'Roof',
                 'trunk' => 'Back-cover',
                 'hoodback' => 'Rear-bumper',
                 'hood' => 'Hood',
                 'bumper_front' => 'Front-bumper',
                 'front_left_rack' => 'Left-front-rack',
                 'back_left_rack' => 'Left-rear-rack',
                 'middle_left_rack' => 'Left-middle-rack',
                 'middle_right_rack' => 'Right-middle-rack',
                 'front_right_rack' => 'Right-front-rack',
                 'back_right_rack' => 'Right-rear-rack',
             ];

                @endphp

                <td width="75%" class=" condition__photos">

                    <div class="condition__side condition__side-front">
                        @foreach($report->colored as $part => $value)
                            @isset($translate[$part])
                                <div class="condition__value {{ $translate[$part] }}">
                                    @if($value == "5")
                                        <img src="{{url('/assets/1000.png')}}" alt="">
                                    @elseif($value == "4")
                                        <img src="{{url('/assets/800.png') }}" alt="">
                                    @elseif($value == 3)
                                        <img src="{{url('/assets/500.png') }}" alt="">
                                    @elseif($value == 2)
                                        <img src="{{url('/assets/300.png') }}" alt="">
                                    @elseif($value == 1)
                                        <img src="{{url('/assets/100.png') }}" alt="">
                                    @endif
                                </div>
                            @endif
                        @endforeach
                        {{--                        <div class="image-color bonner">--}}

                        @if($report->body == 'купе')
                            <img src="{{url('/assets/car-front-coupe.png') }}" alt="car-front">
                        @elseif($report->body == 'кроссовер')
                            <img src="{{url('/assets/car-front-crossover.png') }}" alt="car-front">
                        @else
                            <img src="{{url('/assets/car-front.png') }}" alt="car-front">
                        @endif
                    </div>
                    <div class="condition__side condition__side-back">
                        @foreach($report->colored as $part => $value)
                            @isset($translate[$part])

                                <div class="condition__value {{ $translate[$part] }}">
                                    @if($value == "5")
                                        <img src="{{url('/assets/1000.png')}}" alt="">
                                    @elseif($value == "4")
                                        <img src="{{url('/assets/800.png') }}" alt="">
                                    @elseif($value == 3)
                                        <img src="{{url('/assets/500.png') }}" alt="">
                                    @elseif($value == 2)
                                        <img src="{{url('/assets/300.png') }}" alt="">
                                    @elseif($value == 1)
                                        <img src="{{url('/assets/100.png') }}" alt="">
                                    @endif
                                </div>
                            @endif
                        @endforeach

                        @if($report->body == 'купе')
                            <img src="{{url('/assets/car-back-coupe.png') }}" alt="car-front">
                        @elseif($report->body == 'кроссовер')
                            <img src="{{url('/assets/car-back-crossover.png') }}" alt="car-front">
                        @else
                            <img src="{{url('/assets/car-back.png') }}" alt="car-front">
                        @endif
                    </div>
                </td>

                <td width="25%" class="condition__measurement ">
                    <span class="measurement__values">
                        <img src="{{ url('/assets/gradient.png') }}" alt="">
                    </span>
                    <div class="measurement__titles">
                        <div class="titles__item">1000 + мкм</div>
                        <div class="titles__item">до 800 мкм</div>
                        <div class="titles__item">до 500 мкм</div>
                        <div class="titles__item">до 300 мкм</div>
                        <div class="titles__item">100 мкм</div>
                    </div>
                </td>
            </tr>

        </table>
    </div>
</section>

<section class="recommendation">
    <div class="container flex">
        <div class="recommendation-left left">
            <div class="h2">Рекомендации и выводы</div>
            <div class="recommendation__text">
                <p>
                    {{ $report->comment }}
                </p>
                @if($report->comment_computer_diag)
                    <p>
                        Компьютерная диагностика: {{ $report->comment_computer_diag }}
                    </p>
                @endif
                {{--                <p>--}}
                {{--                    {{ $report->smells ? 'Посторонние запахи отстуствуют' : 'Посторонние запахи присуствуют' }}--}}
                {{--                </p>--}}
                <p>

                    {{ $report->equipmentStatus }}
                </p>

                @if($report->equipmentStatus  == 'Есть замечания')
                    <p>
                        {{ $report->functions_check ? 'Есть недочеты по работе опций:' : ''}} <br>
                        {{ $report->functions_problems }}
                    </p>
                @endif

            </div>
        </div>
        <div class="recommendation__cost right">
            <img
                    src="{{ url('/assets/money.png') }}"
                    alt="cost">
            <div class="h3">Цена</div>
            <div class="cost__value accent">{{ number_format($report->price_value, 0, ' ', ' ') }} AED</div>

        </div>
    </div>
</section>
<footer class="footer">
    <div class="container header__container">
        <div>
            <span class="header__date left">
                <div class="header__date">
                    <div class="date__date accent">
                        Дата
                    </div>
                    <div class="date__title">
                        @php
                            $currentDate =  date_create( (($report->updated_at  && $report->updated_at != $report->created_at) ? $report->updated_at : $report->created_at))->format('d-m-Y');;
                            $currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);
                        @endphp
                        {{$currentDate}}
                    </div>
                </div>
            </span>
            <span class="footer__qr right">
                <img
                        src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate(URL::to('/'.$report->pseudoId))) !!} ">
            </span>
            <span class="header__qr-text">
                <div class="header__qr-text">
                    Отсканируй QR-код, чтобы просмотреть детальный отчет онлайн

                </div>
            </span>
        </div>

    </div>

</footer>
<div class="page-number">стр.</div>

<div class="page-break"></div>

<header class="header ">
    <div class="container header__container">
        <div class="header__logo">
            <img src="{{ url('/assets/LogoHeader.fccae26c.png') }}" alt="logo">
        </div>
        <div class="header__right">
            <div class="header__qr">
                <img
                        src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate('https://www.car-experts.ae/')) !!} ">
            </div>

        </div>
        <div class="header__qr-text">
            Отсканируйте QR-код,
            чтобы посмотреть наши
            контакты
        </div>
    </div>
</header>
<section class="report">
    <div class="container">
        <div class="h1">Фотоотчет</div>

        @php
            $photos = array_slice(array_merge(array_slice($report->photo_external, 0, 3), $report->photo_internal, ),0,5);
        @endphp
        {{--        <table>--}}
        {{--            <tr class="photo__line">--}}
        {{--                <td width="65%" class="">--}}
        {{--                    <img class="big" src="{{ $photos[0]['photo'] }}" alt="slide">--}}
        {{--                </td>--}}

        {{--            </tr>--}}
        {{--        </table>--}}
        <table>
            @for($i = 1; $i<count($photos); $i++)
                <tr class="photo__line">
                    @isset($photos[$i])
                        <td>
                            <img src="{{ url($photos[$i++]['photo']) }}" alt="slide">
                        </td>
                    @endif
                    @isset($photos[$i])

                        <td>
                            <img src="{{ url($photos[$i]['photo']) }}" alt="slide">
                        </td>
                    @endif

                </tr>

            @endfor
        </table>
    </div>
</section>
<footer class="footer">
    <table class="container header__container">
        <tr>

            <td class="header__logo">
                <img src="{{url('/assets/LogoFooter.049f563c.png') }}" alt="logo">
            </td>
            <td class="header__contacts">
                <span class="link contacts__link">+971 52 595 32 80</span>
                <span class="link contacts__link">hello@car-experts.ae</span>
            </td>

            <td class="header__qr-text">
                <div class="header__qr-text">
                    Отсканируй QR-код, чтобы просмотреть детальный отчет онлайн

                </div>
            </td>
            <td class="footer__qr right">
                <img
                        src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate(URL::to('/'.$report->pseudoId))) !!} ">
            </td>
        </tr>

    </table>

</footer>
<div class="page-number">стр.</div>

<div class="page-break"></div>


<header class="header ">
    <div class="container header__container">
        <div class="header__logo">
            <img src="{{ url('/assets/LogoHeader.fccae26c.png') }}" alt="logo">
        </div>
        <div class="header__right">
            <div class="header__qr">
                <img
                        src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate('https://www.car-experts.ae/')) !!} ">
            </div>

        </div>
        <div class="header__qr-text">
            Отсканируйте QR-код,
            чтобы посмотреть наши
            контакты
        </div>
    </div>
</header>
<section class="components">
    <div class="container">
        <div class="h1">Регистрационные данные</div>
        <table>
            <tr>
                <td class="components__item item">

                    @if ( $report->photo_vin)

                        <div class="item__image">
                            <img class="item__image" src="{{ $report->photo_vin }}" alt="vin">
                        </div>
                        <div class="item__text h2">VIN</div>
                    @endif
                </td>

                @if ( $report->photo_tech_info)
                    <td class="components__item item">
                        <div class="item__image">
                            <img class="item__image" src="{{ $report->photo_tech_info }}" alt="Информация о ТС">
                        </div>
                        <div class="item__text h2">Информация о ТС</div>
                    </td>
                @endif
            </tr>
        </table>
    </div>
</section>
<section class="components tires-components">
    <div class="container">
        <div class="h1">Покрышки</div>
        <br>
        <br>
        <table>
            <tr>
                <td class="components__item item" width="847">

                    <div class="flex">
                        <div class="tires-logo">
                            @if($report->tyre_brand_image)
                                <img src="{{url($report->tyre_brand_image) }}"
                                     alt="{{$report->tyre_manufacturer}}">
                            @else
                                <img src="{{url('/assets/tire-up.png') }}" alt="">
                                <div class="tires-text"> {{$report->tyre_manufacturer}}</div>

                            @endif

                            {{--                            @php--}}


                            {{--                                $file =  url('/assets/tires/'.str_replace (' ', '-', $report->tyre_manufacturer).'.png');--}}

                            {{--                                $file_headers = @get_headers($file);--}}
                            {{--                                if($file_headers[0] == 'HTTP/1.1 404 Not Found') {--}}
                            {{--                                    $exists = false;--}}
                            {{--                                }--}}
                            {{--                                else {--}}
                            {{--                                    $exists = true;--}}
                            {{--                                }--}}
                            {{--                            @endphp--}}


                            {{--                            @if ($exists)--}}
                            {{--                                <img src="{{ url('/assets/tires/'.str_replace (' ', '-', $report->tiresBrand).'.png')}}"--}}
                            {{--                                     alt="{{$report->tiresBrand}}">--}}
                            {{--                            @else--}}
                            {{--                                <div class="img">--}}

                            {{--                                    {{$report->tiresBrand}}--}}
                            {{--                                </div>--}}

                            {{--                            @endif--}}
                        </div>
                        <div class="tires-chars">
                            <div class="tires-chars__title">
                                Состояние
                            </div>
                            <div class="tires-chars__title-br"></div>
                            <div class="tires-chars__text">
                                <div class="tires-chars__box">

                                    @if($report->tire_condition && date('Y')-3 <= $report->tyre_year)
                                        <img src="{{url('/assets/ok.png')}}" alt="">
                                    @else
                                        <img src="{{url('/assets/notOk.png')}}" alt="">
                                    @endif
                                </div>
                                <div class="tires-chars__text-text">

                                    @if(!$report->tire_condition )
                                        Не в норме
                                    @elseif(date('Y')-3 > $report->tyre_year)
                                        Не проходное
                                    @else
                                        В норме
                                    @endif
                                </div>

                            </div>

                            <div class="tires-line">

                            </div>

                            <div class="tires-chars__title">
                                год выпуска
                            </div>
                            <div class="tires-chars__title-br"></div>
                            <div class="tires-chars__text">
                                <div class="tires-chars__box">

                                    @if($report->tyres_year>=2019)
                                        <img src="{{url('/assets/ok.png')}}" alt="">
                                    @else
                                        <img src="{{url('/assets/alert.png')}}" alt="">
                                    @endif
                                </div>
                                <div class="tires-chars__text-text">

                                    {{ $report->tyre_year }}
                                </div>

                            </div>
                        </div>


                    </div>
                </td>
                <td class="components__item item" width="847">
                    @if($report->tyre_photo)
                        <div class="tires-photo">
                            <img src="{{ $report->tyre_photo }}" alt="">
                        </div>
                    @endif
                </td>
            </tr>
        </table>
    </div>
</section>
<footer class="footer">
    <table class="container header__container">
        <tr>

            <td class="header__logo">
                <img src="{{url('/assets/LogoFooter.049f563c.png') }}" alt="logo">
            </td>
            <td class="header__contacts">
                <span class="link contacts__link" href="">+971 52 595 32 80</span>
                <span class="link contacts__link" href="">hello@car-experts.ae</span>
            </td>

            <td class="header__qr-text">
                <div class="header__qr-text">
                    Отсканируй QR-код, чтобы просмотреть детальный отчет онлайн

                </div>
            </td>
            <td class="footer__qr right">
                <img
                        src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate(URL::to('/'.$report->pseudoId))) !!} ">
            </td>
        </tr>

    </table>

</footer>
<div class="page-number">стр.</div>

<div class="page-break"></div>


<header class="header ">
    <div class="container header__container">
        <div class="header__logo">
            <img src="{{ url('/assets/LogoHeader.fccae26c.png') }}" alt="logo">
        </div>
        <div class="header__right">
            <div class="header__qr">
                <img
                        src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate('https://www.car-experts.ae/')) !!} ">
            </div>

        </div>
        <div class="header__qr-text">
            Отсканируйте QR-код,
            чтобы посмотреть наши
            контакты
        </div>
    </div>
</header>
<section class="components brakes">
    <div class="container">
        <div class="h1">Повреждения</div>
        @php
            $badParts = (array_merge($report->photo_external_damage, $report->photo_internal_damage)) ;
        @endphp
        @if( count($badParts)>0)
            <table>
                @for($i = 0; $i<count($badParts); $i++)
                    <tr class="photo__line">
                        @if(isset($badParts[$i]) && isset($badParts[$i]['photo']))
                            <td>
                                <img src="{{ $badParts[$i]['photo'] }}" alt="slide">
                                <br>
                                @isset( $badParts[$i]['description'] ) {{ $badParts[$i]['description'] }}@endif
                            </td>
                        @endif
                        @if($badParts[$i++] && $i<count($badParts) && isset($badParts[$i]['photo']) )

                            <td>
                                <img src="{{ $badParts[$i]['photo'] }}" alt="slide">
                                <br>
                                @isset( $badParts[$i]['description'] ) {{ $badParts[$i]['description'] }}@endif
                            </td>
                        @endif

                    </tr>

                    @if((($i%6 == 5 )) && $i < count($badParts))
            </table>
    </div>

    <footer class="footer">
        <table class="container header__container">
            <tr>

                <td class="header__logo">
                    <img src="{{url('/assets/LogoFooter.049f563c.png') }}" alt="logo">
                </td>
                <td class="header__contacts">
                    <span class="link contacts__link">+971 52 595 32 80</span>
                    <span class="link contacts__link">hello@car-experts.ae</span>
                </td>

                <td class="header__qr-text">
                    <div class="header__qr-text">
                        Отсканируй QR-код, чтобы просмотреть детальный отчет онлайн

                    </div>
                </td>
                <td class="footer__qr right">
                    <img
                            src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate(URL::to('/'.$report->pseudoId))) !!} ">
                </td>
            </tr>

        </table>

    </footer>
    <div class="page-number">стр.</div>

    <div class="page-break"></div>


    <header class="header ">
        <div class="container header__container">
            <div class="header__logo">
                <img src="{{ url('/assets/LogoHeader.fccae26c.png') }}" alt="logo">
            </div>
            <div class="header__right">
                <div class="header__qr">
                    <img
                            src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate('https://www.car-experts.ae/')) !!} ">
                </div>

            </div>
            <div class="header__qr-text">
                Отсканируйте QR-код,
                чтобы посмотреть наши
                контакты
            </div>
        </div>
    </header>
    <br><br>
    <div class="container">
        <table>
            @endif
            @endfor
        </table>
        @else
            <div class="no-trash">
                <div class="h1">
                    Вы счастливчик! <br>
                    Машина без единого повреждения
                </div>
                <div class="no-trash__like">
                    <svg width="115" height="120" viewBox="0 0 115 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M8.15885 56.9702V99.9123H26.3389L27.2569 100.02C44.1349 103.956 55.3189 106.794 60.8929 108.552C68.2969 110.886 71.0569 111.456 76.079 111.792C79.835 112.05 84.101 110.604 86.045 108.624C87.119 107.532 87.923 105.288 88.241 101.808C88.3068 101.079 88.5677 100.38 88.9963 99.7856C89.4249 99.1913 90.0054 98.7232 90.677 98.4303C92.171 97.7823 93.413 96.7262 94.451 95.1902C95.411 93.7862 96.035 91.1702 96.149 87.3842C96.169 86.6882 96.3664 86.0088 96.7223 85.4103C97.0782 84.8119 97.581 84.3141 98.183 83.9642C101.675 81.9422 103.403 79.6622 103.763 76.9862C104.159 74.0282 103.199 70.6982 100.685 66.9062C100.095 66.0169 99.8754 64.9325 100.073 63.8838C100.27 62.835 100.868 61.9045 101.741 61.2902C104.147 59.5982 105.467 57.2462 105.797 53.9102C106.325 48.5942 102.935 44.6642 95.261 43.8782C88.4262 43.2022 81.5254 43.7776 74.8969 45.5762C74.145 45.7727 73.3526 45.7503 72.613 45.5118C71.8734 45.2732 71.2172 44.8284 70.7218 44.2296C70.2264 43.6308 69.9123 42.903 69.8165 42.1318C69.7207 41.3605 69.8471 40.578 70.1809 39.8762C73.1809 33.5282 74.849 28.2902 75.239 24.2341C75.749 18.8521 74.507 14.9521 71.6029 11.7361C69.4009 9.30012 65.8789 7.90812 64.5589 8.19612C62.8189 8.56812 61.6849 9.57612 60.2089 13.1041C59.3389 15.1921 58.9189 16.9681 58.1989 21.1141C57.5089 25.0501 57.1309 26.8262 56.3449 29.1542C53.9749 36.2102 48.1609 43.5242 40.3549 48.5702C34.8841 52.1025 28.9549 54.8682 22.7329 56.7902C22.3442 56.91 21.9396 56.9707 21.5329 56.9702H8.15885ZM7.90685 108.09C5.96885 108.144 4.22885 107.712 2.77085 106.692C0.910843 105.39 0.0348418 103.338 0.0168418 100.974L0.0348418 57.0362C-0.169158 54.6962 0.520842 52.5482 2.15284 50.9522C3.68285 49.4522 5.68085 48.7442 7.79285 48.7922H20.9029C26.206 47.1024 31.262 44.7177 35.9389 41.7002C42.2269 37.6322 46.8589 31.8002 48.6289 26.5441C49.2349 24.7321 49.5589 23.2321 50.1709 19.7041C50.9989 14.9701 51.5149 12.7681 52.7029 9.93612C55.1629 4.04412 58.3909 1.16411 62.8429 0.198111C67.2229 -0.749891 73.601 1.77611 77.633 6.24012C82.103 11.1841 84.077 17.3701 83.345 25.0141C83.033 28.3022 82.121 31.9802 80.621 36.0782C85.7436 35.3316 90.9387 35.2188 96.089 35.7422C108.131 36.9722 114.893 44.8142 113.909 54.7262C113.477 58.9982 111.929 62.6282 109.295 65.4782C111.509 69.7442 112.391 73.9622 111.839 78.0782C111.203 82.8182 108.563 86.7662 104.171 89.8322C103.829 93.9902 102.875 97.3083 101.183 99.7923C99.8498 101.799 98.1103 103.504 96.077 104.796C95.429 108.9 94.067 112.11 91.841 114.366C88.151 118.122 81.557 120.36 75.533 119.952C69.8149 119.568 66.4309 118.872 58.4509 116.352C53.1889 114.69 42.2929 111.93 25.8709 108.09H7.90085H7.90685ZM18.1129 55.1042C18.1113 54.5674 18.2157 54.0355 18.42 53.5392C18.6243 53.0428 18.9246 52.5916 19.3036 52.2114C19.6826 51.8313 20.133 51.5297 20.6287 51.3239C21.1245 51.1181 21.6561 51.0122 22.1929 51.0122C22.7287 51.0138 23.2589 51.1208 23.7533 51.3273C24.2477 51.5338 24.6966 51.8357 25.0744 52.2157C25.4521 52.5956 25.7513 53.0463 25.9549 53.5419C26.1585 54.0375 26.2625 54.5684 26.2609 55.1042V101.172C26.2617 101.708 26.1569 102.239 25.9526 102.734C25.7483 103.229 25.4484 103.68 25.0701 104.059C24.6918 104.438 24.2425 104.74 23.7478 104.945C23.2531 105.151 22.7227 105.257 22.1869 105.258C21.6511 105.257 21.1207 105.151 20.626 104.945C20.1313 104.74 19.6819 104.438 19.3036 104.059C18.9253 103.68 18.6255 103.229 18.4211 102.734C18.2168 102.239 18.1121 101.708 18.1129 101.172V55.1042Z"
                                fill="#222222"/>
                    </svg>
                </div>
            </div>
        @endif
    </div>
</section>

<footer class="footer">
    <table class="container header__container">
        <tr>

            <td class="header__logo">
                <img src="{{url('/assets/LogoFooter.049f563c.png') }}" alt="logo">
            </td>
            <td class="header__contacts">
                <span class="link contacts__link" href="">+971 52 595 32 80</span>
                <span class="link contacts__link" href="">hello@car-experts.ae</span>
            </td>

            <td class="header__qr-text">
                <div class="header__qr-text">
                    Отсканируй QR-код, чтобы просмотреть детальный отчет онлайн

                </div>
            </td>
            <td class="footer__qr right">
                <img
                        src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(140)->generate(URL::to('/'.$report->pseudoId))) !!} ">
            </td>
        </tr>

    </table>

</footer>
<div class="page-number">стр.</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<script type="text/php">
    if (isset($pdf)) {
        $pdf->page_script('
             if ($PAGE_COUNT > 1) {
                 $font = $fontMetrics->getFont("Lato", "regular");
                 $pdf->page_text(522, 770, "Page {PAGE_NUM} / {PAGE_COUNT}", $font, 8, array(.5,.5,.5));
            }
        ');
   }



</script>

</body>
</html>
