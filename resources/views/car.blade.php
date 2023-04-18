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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap" rel="stylesheet">


    <!--    <link rel="stylesheet" href="style/style.sass">-->
    <script type="module" crossorigin src="/assets/index.fe9cca41.js"></script>
    <link rel="stylesheet" href="/assets/index.c9ba42bb.css">
    <link rel="stylesheet" href="/assets/add.css">
    <link rel="preload" as="image"
          href="/assets/brands/{{strtolower(str_replace (' ', '-', $report->brand)).'-logo.png'}}">
</head>
<body>
<header class="header">
    <div class="container header__container">
        <div class="header__logo">
            <img src="/assets/LogoHeader.fccae26c.png" alt="logo">
        </div>
        <div class="header__date">
            <div class="date__title">
                @if($report->updated_at  && $report->updated_at != $report->created_at)
                    Обновлен
                @else
                    Создан
                @endif
            </div>
            <div class="date__date accent">

                @php

                    $_monthsList = array("-01-" => "янв", "-02-" => "фев",
                    "-03-" => "мар", "-04-" => "апр", "-05-" => "мая", "-06-" => "июн",
                    "-07-" => "июл", "-08-" => "авг", "-09-" => "сен",
                    "-10-" => "окт", "-11-" => "ноя", "-12-" => "дек");
                    $_mD = date("-m-"); //для замены

                    $currentDate =  date_create( (($report->updated_at  && $report->updated_at != $report->created_at) ? $report->updated_at : $report->created_at))->format('d-m-Y');;
                    $currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);
                @endphp
                {{$currentDate}}
            </div>
        </div>
        <div class="header__contacts">
            <a class="link contacts__link" href="tel:+971525953280">+971 52 595 32 80</a>
            <a class="link contacts__link" href="mailto:hello@car-experts.ae">hello@car-experts.ae</a>
        </div>
    </div>
</header>
<section class="overview">
    <div class="container">
        <div class="overview__name h1">
            {{ $report->brand }}
            {{ $report->model }}
        </div>
        <h1 class="h1">Обзор автомобиля</h1>
        <div class="overview__content">
            <div class="overview__logo-wrapper">
                @isset($report->photo_external[0])
                    <img src="{{$report->photo_external[0]['preview']}}" alt="photo">
                @endif
                <div class="overview__logo">
                    <img

                            src="{{ $report->brand_image }}"
                            alt="car-logo">
                </div>
            </div>
            <div class="overview__name">
                {{ $report->brand }} <br>
                {{ $report->model }}
            </div>
            <div class="overview__divider"></div>
            <div class="recommendation__cost">
                <img src="/assets/money.svg" alt="cost">
                <div
                        class="cost__value accent">{{ number_format($report->price_value, 0, ' ', ' ') }} {{ $report->price_currency }}</div>
            </div>
            <div class="overview__equipment">
                <div class="equipment__title h3">
                    Комплектация
                </div>
                <div class="equipment__grid">
                    @php
                        $equipmentIco = [
                            'tire_pressure_sensor' => '4G',
                            'adaptive_light' => '6E',
                            'automatic_high_beam' => '5E',
                            'tow_hitch' => '5B',
                            'cruise_control' => '2H',
                            'parking_assistance_system' => '5E',
                            'camera' => '1H',
                            'camera_360' => '6E',
                            'head_up_display' => '1H',
                            'hands_free_trunk' => '6A',
                            'digital_instrument_panel' => '2H',
                            'keyless_entry' => '4A',
                            'power_folding_mirrors' => '6E',
                            'start_stop_system' => '4F',
                            'leather_interior' => '6G',
                            'sunroof' => '1C',
                            'panoramic_roof' => '2G',
                            'heated_steering_wheel' => '4C',
                            'third_row_of_seats' => '6G',
                            'power_seat_adjustment' => '4H',
                            'seat_position_memory' => '6G',
                            'heated_seats' => '6G',
                            'ventilated_seats' => '6G',
                            'premium_audio_system' => '4D',
                            'rear_passenger_multimedia' => '4D',
                            'navigation_system' => '5H',
                            'android_auto_carplay' => '4D',
                            'outlet_220V' => '1A',
                            'seat_massage' => '6G',
                            'door_closers' => '4A',
                        ];
                        $vocabulary = [
                            'tire_pressure_sensor' => 'Датчик давления в шинах',
                            'adaptive_light' => 'Адаптивный свет',
                            'automatic_high_beam' => 'Автоматический дальний свет',
                            'tow_hitch' => 'Фаркоп',
                            'cruise_control' => 'Круиз-контроль',
                            'parking_assistance_system' => 'Система помощи при парковке',
                            'camera' => 'Камера',
                            'camera_360' => 'Камера 360',
                            'head_up_display' => 'Проекционный дисплей',
                            'hands_free_trunk_opening' => 'Открытие багажника без помощи рук',
                            'digital_instrument_panel' => 'Электронная приборная панель',
                            'keyless_entry' => 'Бесключевой доступ',
                            'electric_folding_mirrors' => 'Электроскладывание зеркал',
                            'start_stop_system' => 'Система «старт-стоп»',
                            'leather_interior' => 'Кожанный салон',
                            'sunroof' => 'Люк',
                            'panoramic_roof' => 'Панорамная крыша',
                            'heated_steering_wheel' => 'Обогрев рулевого колеса',
                            'third_row_of_seats' => 'Третий ряд сидений',
                            'electric_seat_adjustment' => 'Электрорегулировка сидений',
                            'seat_position_memory' => 'Память положения сидений',
                            'heated_seats' => 'Подогрев сидений',
                            'ventilated_seats' => 'Вентиляция сидений',
                            'premium_audio_system' => 'Премиум Аудиосистема',
                            'rear_passenger_multimedia_system' => 'Мультимедиа система для задних пассажиров',
                            'navigation_system' => 'Навигационная система',
                            'android_auto_carplay' => 'Android Auto/CarPlay',
                            'power_outlet_220v' => 'Розетка 220V',
                            'seat_massage' => 'Массаж сидений',
                            'door_closers' => 'Доводчики дверей',
                        ];
                    @endphp

                    @foreach($report->equipment as $item)
                        @if($item['value'])
                            <div class="equipment__item">
                                <div class="item__icon">
                                    <img
                                            src="/assets/icons/{{ isset($equipmentIco[$item['name']]) ? $equipmentIco[$item['name']] : 'no-icon'  }}.png"
                                            alt="icon">
                                </div>
                                <div class="item__name">
                                    {{ $vocabulary[$item['name']] }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="technical">
    <div class="container">
        <div class="h2">Технические характеристики</div>
        <table class="technical__table">
            <tr>
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
<section class="condition">
    <div class="container flex">
        <div class="container--left">
            <div class="h2">Состояние кузова</div>
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
            <div class="condition__content
                @if($report->body == 'coupe')
                    coupe-mode
@elseif($report->body == 'crossover')
                    crossover-mode
@endif">
                <div class="condition__side condition__side-front">
                    @foreach($report->colored as $part => $value)
                        <div class="condition__value {{ $translate[$part] }}">
                            @if($value == "5")
                                <img src="/assets/1000.png" alt="">
                            @elseif($value == "4")
                                <img src="/assets/800.png" alt="">
                            @elseif($value == 3)
                                <img src="/assets/500.png" alt="">
                            @elseif($value == 2)
                                <img src="/assets/300.png" alt="">
                            @elseif($value == 1)
                                <img src="/assets/100.png" alt="">
                            @endif
                        </div>
                    @endforeach
                    {{--                @foreach($translate as $item)--}}
                    {{--                    <div class="condition__value {{ $item}}">--}}
                    {{--                            <img src="/assets/paint-1000.png" alt="">--}}
                    {{--                    </div>--}}
                    {{--                @endforeach--}}
                    @if($report->body == 'coupe')
                        <img src="/assets/car-front-coupe.png" alt="car-front">
                    @elseif($report->body == 'crossover')
                        <img src="/assets/car-front-crossover.png" alt="car-front">
                    @else
                        <img src="/assets/car-front.png" alt="car-front">
                    @endif
                </div>
                <div class="condition__side condition__side-back">
                    {{--                @foreach($translate as $item)--}}
                    {{--                    <div class="condition__value {{ $item}}">--}}
                    {{--                        <img src="/assets/paint-1000.png" alt="">--}}
                    {{--                    </div>--}}
                    {{--                @endforeach--}}
                    @foreach($report->colored as $part => $value)

                        <div class="condition__value {{ $translate[$part] }}">
                            @if($value == "5")
                                <img src="/assets/1000.png" alt="">
                            @elseif($value == "4")
                                <img src="/assets/800.png" alt="">
                            @elseif($value == 3)
                                <img src="/assets/500.png" alt="">
                            @elseif($value == 2)
                                <img src="/assets/300.png" alt="">
                            @elseif($value == 1)
                                <img src="/assets/100.png" alt="">
                            @endif
                        </div>
                    @endforeach

                    @if($report->body == 'coupe')
                        <img src="/assets/car-back-coupe.png" alt="car-front">
                    @elseif($report->body == 'crossover')
                        <img src="/assets/car-back-crossover.png" alt="car-front">
                    @else
                        <img src="/assets/car-back.png" alt="car-front">
                    @endif
                </div>
                <div class="condition__measurement">
                    <div class="measurement__titles">
                        <div class="titles__item">1000 + мкм</div>
                        <div class="titles__item">до 800 мкм</div>
                        <div class="titles__item">до 500 мкм</div>
                        <div class="titles__item">до 300 мкм</div>
                        <div class="titles__item">100 мкм</div>
                    </div>
                    <div class="measurement__values"></div>
                </div>
            </div>
        </div>
        <div class="container--right">
            <div class="tyres">
                <div class="h2">Покрышки</div>
                <div class="tyres__content">
                    <div class="tyres-logo">
                        @if($report->tyre_brand_image)
                            <img src="{{ $report->tyre_brand_image }}"
                                 alt="{{$report->tyre_manufacturer}}">
                        @else
                            <img src="/assets/tire-up.png" alt="">
                        @endif
                    </div>
                    <div class="tyres-chars">
                        <div class="tyres-chars__item">
                            <div class="tyres-chars__title">Производитель</div>
                            <div class="tyres-chars__text">
                                {{$report->tyre_manufacturer}}
                            </div>
                        </div>
                        <div class="tyres-chars__item">
                            <div class="tyres-chars__title">
                                Состояние
                            </div>
                            <div class="tyres-chars__text">
                                <div class="tyres-chars__box">
                                    @if($report->tyres_status)
                                        <img src="/assets/ok.png" alt="">
                                    @else
                                        <img src="/assets/notOk.png" alt="">
                                    @endif
                                </div>
                                @if($report->tyres_status)
                                    В норме
                                @else
                                    Плохое
                                @endif
                            </div>
                        </div>
                        <div class="tyres-chars__item">
                            <div class="tyres-chars__title">
                                Год выпуска
                            </div>
                            <div class="tyres-chars__text">
                                {{--                                <div class="tyres-chars__box">--}}
                                {{--                                    @if($report->tyres_year>=2019)--}}
                                {{--                                        <img src="/assets/ok.png" alt="">--}}
                                {{--                                    @else--}}
                                {{--                                        <img src="/assets/alert.png" alt="">--}}
                                {{--                                    @endif--}}
                                {{--                                </div>--}}
                                {{ $report->tyres_year }}
                            </div>
                        </div>
                    </div>
                    @if ($report->tyre_preview)
                        <div class="tyres-photo">
                            <img src="{{ $report->tyre_preview }}" alt="" data-fancybox="demo" data-caption="Покрышки">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recommendation">
    <div class="container grid">
        <div class="recommendation--left">
            <div class="h2">Рекомендации и выводы</div>
            <div class="recommendation__text">
                <p>
                    {{ $report->comment }}
                </p>
                <p>
                    {{ $report->equipmentStatus }}
                </p>
                @if($report->functions_check)
                    <p>
                        {{ $report->functions_problems }}
                    </p>
                @endif
            </div>
        </div>
        <div class="recommendation--right">
            <div class="h2">Цена автомобиля</div>
            <div class="recommendation__cost">
                <img src="/assets/money-pc.svg" alt="cost">
                <div
                        class="cost__value accent">{{ number_format($report->price_value, 0, ' ', ' ') }} {{ $report->price_currency }}</div>
            </div>
        </div>
    </div>
</section>
<section class="report">
    <div class="container">
        <div class="h2">
            <span class="report__title" id="photo-report">Фотоотчет</span>
            {{--            <span class="report__divider"></span>--}}
            @if($report->video)
                <span class="report__title not-active" id="video-report">Видеоотчет</span>
            @endif
        </div>
        <div class="report__content">
            <div class="report__photo report__type">
                <div class="report__slider slider-for">

                    @foreach($report->photo_external as $photo)
                        <div class="slide">
                            <div class="slide__image">
                                <img src="{{ $photo['preview'] }}" alt="slide" data-fancybox="demo"
                                     data-caption="Фотоотчет">
                            </div>
                        </div>
                    @endforeach
                    @foreach($report->photo_internal as $photo)
                        <div class="slide">
                            <div class="slide__image">
                                <img src="{{ $photo['preview'] }}" alt="slide" data-fancybox="demo"
                                     data-caption="Фотоотчет">
                            </div>

                        </div>
                    @endforeach

                </div>
                <div class="report__slider slider-nav">
                    @foreach($report->photo_external as $photo)

                        <div class="slide">
                            <div class="slide__image-wrapper">
                                <img src="{{ $photo['preview'] }}" alt="slide">
                            </div>
                        </div>
                    @endforeach
                    @foreach($report->photo_internal as $photo)

                        <div class="slide">
                            <div class="slide__image-wrapper">
                                <img src="{{ $photo['preview'] }}" alt="slide">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @if($report->video)
                <div class="report__video report__type not-active">
                    <div class="video-wrapper">
                        <video muted loop type='video/mp4' controls="">
                            <source src="{{$report->video}}">
                        </video>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<section class="components">
    <div class="container">
        <div class="h2">Регистрационные данные</div>
        <div class="flex">
            @if ( $report->photo_vin)

                <div class="components__item item">
                    <a class="item__image" data-fancybox="demo" data-caption="Регистрационные данные"
                       href="{{ $report->photo_vin }}">
                        <img src="{{ $report->photo_vin }}" alt="vin">
                    </a>
                    <div class="item__text h2">VIN</div>
                </div>
            @endif
            @if ( $report->photo_tech_info)
                <a class="components__item item" data-fancybox="demo" data-caption="Регистрационные данные"
                   href="{{ $report->photo_tech_info }}">
                    <div class="item__image">
                        <img src="{{ $report->photo_tech_info }}" alt="info ts">
                    </div>
                    <div class="item__text h2">Информация о ТС</div>
                </a>
            @endif
        </div>
    </div>
</section>
{{--<section class="components">--}}
{{--    <div class="container">--}}
{{--        <div class="h1">Покрышки</div>--}}
{{--        <div class="flex tyres-flex">--}}
{{--            <div class="tyres-logo">--}}
{{--                <img src="/assets/tyre-up.png" alt="">--}}




{{--                    <img src="{{ $report->tyre_brand_image }}"--}}
{{--                         alt="{{$report->tyre_manufacturer}}">--}}
{{--                    {{$report->tyre_manufacturer}}--}}
{{--            </div>--}}
{{--            <div class="tyres-chars">--}}
{{--                <div class="tyres-chars__title">--}}
{{--                    Состояние--}}
{{--                </div>--}}
{{--                <div class="tyres-chars__text">--}}
{{--                    <div class="tyres-chars__box">--}}
{{--                        @if($report->tyres_status)--}}
{{--                            <img src="/assets/ok.png" alt="">--}}
{{--                        @else--}}
{{--                            <img src="/assets/notOk.png" alt="">--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    @if($report->tyres_status)--}}
{{--                        В норме--}}
{{--                    @else--}}
{{--                        Плохое--}}
{{--                    @endif--}}

{{--                </div>--}}

{{--                <div class="tyres-line">--}}

{{--                </div>--}}

{{--                <div class="tyres-chars__title">--}}
{{--                    год выпуска--}}
{{--                </div>--}}
{{--                <div class="tyres-chars__text">--}}
{{--                    <div class="tyres-chars__box">--}}

{{--                        @if($report->tyres_year>=2019)--}}
{{--                            <img src="/assets/ok.png" alt="">--}}
{{--                        @else--}}
{{--                            <img src="/assets/alert.png" alt="">--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    {{ $report->tyres_year }}--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            @if ($report->tyre_photo)--}}
{{--                <div class="tyres-photo">--}}
{{--                    <img src="{{ $report->tyre_photo }}" alt="" data-fancybox="demo" data-caption="Покрышки">--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<section class="components">
    <div class="container">
        <div class="h2">Повреждения</div>

        @if(count(array_merge($report->photo_external_damage, $report->photo_internal_damage))>0)
            <div class="flex ">

                @foreach((array_merge($report->photo_external_damage, $report->photo_internal_damage)) as $badPart)
                    <div class="components__item item">
                        <img class="item__image" src="{{ $badPart['preview'] }}" alt="vin" data-fancybox="demo"
                             data-caption="Повреждение – {{ $badPart['description'] }}">
                        <div class="item__desc">
                            {{ $badPart['description'] }}
                        </div>
                    </div>
                @endforeach
            </div>
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
    <div class="container header__container">
        <div class="header__logo">
            <img src="/assets/LogoHeader.fccae26c.png" alt="logo">
        </div>
        <div class="header__date">
            <div class="date__title">
                Дата диагностики
            </div>
            <div class="date__date accent">

                @php

                    $_monthsList = array("-01-" => "янв", "-02-" => "фев",
                    "-03-" => "мар", "-04-" => "апр", "-05-" => "мая", "-06-" => "июн",
                    "-07-" => "июл", "-08-" => "авг", "-09-" => "сен",
                    "-10-" => "окт", "-11-" => "ноя", "-12-" => "дек");
                    $_mD = date("-m-"); //для замены

                    $currentDate =  date_create( (($report->updated_at  && $report->updated_at != $report->created_at) ? $report->updated_at : $report->created_at))->format('d-m-Y');;
                    $currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);
                @endphp
                {{$currentDate}}
            </div>
        </div>
        <div class="header__contacts">
            <a class="link contacts__link" href="tel:+971525953280">+971 52 595 32 80</a>
            <a class="link contacts__link" href="mailto:hello@car-experts.ae">hello@car-experts.ae</a>
        </div>
    </div>
    <div class="container footer__container">
        <a class="btn footer__btn" href="/pdf/ru/{{$report->pseudo_id}}" target="_about">
            Скачать PDF-версию
        </a>
    </div>
</footer>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


</body>
</html>
