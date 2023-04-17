<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/svg+xml" href="/vite.svg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Car Experts</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="style/style.sass">-->
    {{--
    <script type="module" crossorigin src="{{url('/storage/assets/index.a2dc5af3.js') }}"></script>
    --}}
    <style>
        @font-face {
            font-family: 'Futura PT';
            src: url('/storage/fonts/FuturaPT-Book.ttf');
            font-weight: 400
        }

        @font-face {
            font-family: 'Futura PT';
            src: url('/storage/fonts/FuturaPT-Book.ttf');
            font-weight: 500
        }

        body, * {
            font-family: 'Jost', sans-serif;
            font-size: 24px;
            line-height: 110%;
            letter-spacing: -.02em
        }

        * {
            box-sizing: border-box
        }

        section {
            padding-top: 80@else
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
            font-weight: 500;
            margin-bottom: 60px
        }

        h2, .h2 {
            font-size: 48px;
            line-height: 110%;
            font-weight: 500;
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
            font-weight: 500
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
            font-weight: 500;
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

        .recommendation__text{
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

        .components table{
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

        /*.components__item .item__image {*/
        /*    max-width: 705px;*/
        /*    width: 100%;*/
        /*    height: 470px*/
        /*}*/

        .components__item .item__image:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, .75) 100%)
        }

        .components__item .item__text {
            position: relative;
            left: 20px;
            bottom: 100px;
            /*margin-bottom: 0;*/
            color: #fff
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
        .footer{
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
            font-size: 120px !important;
            font-weight: 500 !important;
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

        .brakes table{
            width: 100%;
        }

        .brakes td{
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

        .page-number{
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
        .report table td{
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

        .tires-logo {
        }

        .tires-chars__box {
            display: flex;
            gap: 16px;

        }

        .tires-chars__text * {
            display: inline-block;
            position: relative;
        }

        .tires-chars__text-text{
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
        .tires-chars__title-br{
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

        .tires-logo img, .tires-logo .img{
            margin-left: 25px;
            margin-right: 25px;
        }

        .tires-logo img:first-child, .tires-logo .img:first-child{
            margin-top: 20px;
            margin-bottom: 15px;
        }
        .tires-logo img:nth-child(2), .tires-logo .img:nth-child(2) {
            margin-left: 45px;


        }
        .main-page{
            text-align: center;
        }
        .main-page *{
            text-align: center;
        }

        .main-page>*{
            width: 100%;
        }

        .main-page__date{
            position: absolute;
            bottom: 100px;
            font-size: 30px;
            color: #22222299;
        }

        .main-page__logo{
            margin: 437px auto 337px ;
            width: 700px;
        }

        .main-page__logo img{
            width: 700px;
        }

        .main-page__pre-title{
            font-size: 30px;
            text-transform: uppercase;
        }
        .main-page__title{
            font-size: 120px;
            font-weight: 500;
            line-height: 115px;
            letter-spacing: -0.02em;
            text-align: center;

            margin: 80px 0 100px;
        }

        .main-page__img{
            width: 200px;
            height: 200px;
        }

        .main-page__img img{
            width: 200px;
            height: auto;
        }

        .footer .header__logo img{
            width: 100%;
        }

        .tires-components table{
            width: 100%;
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
            src="{{ url('/assets/brands/'.strtolower(str_replace (' ', '-', $report->brand)).'-logo.png')}}"
            alt="car-logo">
    </div>

    <div class="main-page__date">

        @php


            $_monthsList = array("-01-" => "янв", "-02-" => "фев",
            "-03-" => "мар", "-04-" => "апр", "-05-" => "мая", "-06-" => "июн",
            "-07-" => "июл", "-08-" => "авг", "-09-" => "сен",
            "-10-" => "окт", "-11-" => "ноя", "-12-" => "дек");
            $_mD = date("-m-"); //для замены

            $currentDate =  date_create($report->updated_at)->format('d-m-Y');
            $currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);
        @endphp
        {{$currentDate}}

    </div>
    <div class="box"></div>
</div>
</body>
</html>
