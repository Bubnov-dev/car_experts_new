<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/svg+xml" href="/vite.svg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Car Experts</title>

    <meta name="description" content="Отчет о проверке CarExperts {{ $report->brand }} <br> {{ $report->model }} {{ $report->year }} {{ number_format($report->price_value, 0, ' ', ' ') }} {{ $report->price_currency }}" />
    <meta property="og:title" content="Отчет о проверке CarExperts">
    <meta property="og:url" content="{{ url()->current() }}" />
    @isset($report->photo_external[0])
        <meta property="og:image" content="{{$report->photo_external[0]['photo']}}">
    @endif
    <meta property="og:description" content="{{ $report->brand }} {{ $report->model }}<br>{{ $report->year }} | {{ $report->specification }}<br>{{ number_format($report->price_value, 0, ' ', ' ') }} {{ $report->price_currency }}">

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
{{--    <link rel="preload" href="{{ $report->tyre_brand_image }}" as="image" />--}}
{{--    <link rel="preload" href="{{ $report->brand_image }}" as="image" />--}}
</head>
<body>

<header class="header">
    <div class="container header__container">
        <div class="header__logo">
            <img src="/assets/LogoHeader.fccae26c.png" alt="logo">
        </div>
        <div class="header__date">
            <div class="date__title">

                Создан

            </div>
            <div class="date__date accent">
                @php

                    $_monthsList = array("-01-" => "янв", "-02-" => "фев",
                    "-03-" => "мар", "-04-" => "апр", "-05-" => "мая", "-06-" => "июн",
                    "-07-" => "июл", "-08-" => "авг", "-09-" => "сен",
                    "-10-" => "окт", "-11-" => "ноя", "-12-" => "дек");

                    $_mD = date_create( (($report->updated_at  && $report->updated_at != $report->created_at) ? $report->updated_at : $report->created_at))->format('-m-');

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
                    <img src="{{$report->photo_external[0]['photo']}}" alt="photo">
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
       'parking_sensors' => 'Парктроники',
       'camera' => 'Камера',
       'start_stop' => 'Кнопка «Start engine»',
       'leather' => 'Кожаный салон',
       'third_seat_rows' => 'Третий ряд сидений',
       'seats_heating' => 'Подогрев сидений',
       'multimedia_lcd_screen' => 'Мультимедиа с ЖК-дисплеем',
       'adaptive_cruise_control' => 'Адаптивный круиз-контроль',
       'camera_360' => 'Камеры 360',
       'keyless_entry' => 'Бесключевой доступ',
       'sunroof' => 'Люк',
       'panoramic_roof' => 'Панорамное остекление',
       'electric_seats' => 'Электрорегулировка сидений',
       'seats_memory' => 'Память положения сидений',
       'steering_wheel_heating' => 'Обогрев рулевого колеса',
       'seats_ventilation' => 'Вентиляция сидений',
       'android_auto_carplay' => 'Android Auto / CarPlay',
       'electric_folding_mirrors' => 'Электроскладывание зеркал',
       'electric_trunk_lid' => 'Электропривод крышки багажника',
       'virtual_dashboard' => 'Виртуальная приборная панель',
       'power_steering' => 'Электропривод рулевой колонки',
       'adaptive_lights' => 'Адаптивные фары',
       'automatic_high_beam' => 'Автоматический дальний свет',
       'autopilot' => 'Автопилот',
       'self_parking' => 'Автоматическая парковка',
       'premium_seats_ventilation' => 'Вентиляция сидений',
       'seats_massage' => 'Массаж сидений',
       'multimedia_system_rear_passengers' => 'Мультимедийная система для задних пассажиров',
       'premium_audiosystem' => 'Премиум аудиосистема',
       'windshield_projection' => 'Проекция на лобовое стекло',
       'door_closers' => 'Доводчики дверей',
       ];

                    @endphp

                    @foreach($report->equipment as $key => $value)
                        @if($value)
                            <div class="equipment__item">
                                <div class="item__icon">
                                    <img
                                            src="/assets/icons/{{ isset($equipmentIco[$key]) ? $equipmentIco[$key] : 'no-icon' }}.png"
                                            alt="icon">
                                </div>
                                <div class="item__name">
                                    @isset($vocabulary[$key])
                                        {{ $vocabulary[$key] }}
                                    @endif
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

        <div class="technical__grid">
            <div class="technical__item">
                <div class="technical__title">
                    Год выпуска
                </div>
                <div class="technical__value">
                    {{ $report->year }}
                </div>
            </div>
            <div class="technical__item">
                <div class="technical__title">
                    Пробег
                </div>
                <div class="technical__value">
                    {{ number_format($report->mileage, 0, ' ', ' ') }} км
                </div>
            </div>
            <div class="technical__item">
                <div class="technical__title">
                    Двигатель
                </div>
                <div class="technical__value">
                    {{ $report->engine_volume }} л / {{ $report->engine_power }} л.с.
                </div>
            </div>
            <div class="technical__item">
                <div class="technical__title">
                    Привод
                </div>
                <div class="technical__value">
                    {{ $report->drive }}
                </div>
            </div>
            <div class="technical__item">
                <div class="technical__title">
                    Коробка
                </div>
                <div class="technical__value">
                    {{ $report->gearbox }}
                </div>
            </div>
            <div class="technical__item">
                <div class="technical__title">
                    ДТП (база)
                </div>
                <div class="technical__value">
                    {{ $report->crashes ? 'Есть': 'Нет' }}
                </div>
            </div>
            <div class="technical__item">
                <div class="technical__title">
                    Спецификация
                </div>
                <div class="technical__value">
                    {{ $report->specification }}
                </div>
            </div>
            <div class="technical__item">
                <div class="technical__title">
                    Гарантия
                </div>
                <div class="technical__value">
                    {{ $report->guarantee_check ? 'До ' . ($report->guarantee_mileage ? $report->guarantee_mileage . ' / ' : '') . ($report->guarantee_month ? $report->guarantee_month . ' / ' : ' ')  .$report->guarantee_year : 'Нет' }}
                </div>
            </div>
            <div class="technical__item technical__item--vin">
                <div class="technical__title">
                    VIN
                </div>
                <div class="technical__value">
                    {{ strtoupper($report->vin) }}
                </div>
            </div>
            <div class="technical__item technical__item--color">
                <div class="technical__title">
                    Цвет
                </div>
                <div class="technical__value">
                    {{ $report->body_color }}
                </div>
            </div>
        </div>
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
                @if(mb_strtolower($report->body) == 'купе')
                    coupe-mode
                @elseif(mb_strtolower($report->body) == 'кроссовер')
                    crossover-mode
                @endif">
                <div class="condition__side condition__side-front">
                    @foreach($report->colored as $part => $value)
                        @isset($translate[$part])
                        <div class="condition__value {{ $translate[$part] }}">
                            @if($value == "5")
                                <img src="/assets/1000.png" alt="">
                            @elseif($value == "4")
                                <img src="/assets/1000.png" alt="">
                            @elseif($value == 3)
                                <img src="/assets/800.png" alt="">
                            @elseif($value == 2)
                                <img src="/assets/500.png" alt="">
                            @elseif($value == 1)
                                <img src="/assets/300.png" alt="">
                            @endif
                        </div>
                        @endif
                    @endforeach
                    {{--                @foreach($translate as $item)--}}
                    {{--                    <div class="condition__value {{ $item}}">--}}
                    {{--                            <img src="/assets/paint-1000.png" alt="">--}}
                    {{--                    </div>--}}
                    {{--                @endforeach--}}
                    @if(mb_strtolower($report->body) == 'купе')
                        <img src="/assets/car-front-coupe.png" alt="car-front">
                    @elseif(mb_strtolower($report->body) == 'кроссовер')
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
                        @isset($translate[$part])

                        <div class="condition__value {{ $translate[$part] }}">
                            @if($value == "5")
                                <img src="/assets/1000.png" alt="">
                            @elseif($value == "4")
                                <img src="/assets/1000.png" alt="">
                            @elseif($value == 3)
                                <img src="/assets/800.png" alt="">
                            @elseif($value == 2)
                                <img src="/assets/500.png" alt="">
                            @elseif($value == 1)
                                <img src="/assets/300.png" alt="">
                            @endif
                        </div>
                        @endif

                    @endforeach

                    @if(mb_strtolower($report->body) == 'купе')
                        <img src="/assets/car-back-coupe.png" alt="car-front">
                    @elseif(mb_strtolower($report->body) == 'кроссовер')
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
                @if ($report->tire_similar || !$report->tires || !count($report->tires))
                    <div class="tyres__content">
                        <div class="tyres-logo">
                            <img src="/assets/tire-up.png" alt="">
                            <br>

                        @if($report->tyre_brand_image)
                                <img src="{{ $report->tyre_brand_image }}"
                                     alt="{{$report->tyre_manufacturer}}">
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
                                        @if($report->tire_condition && date('Y')-3 <= $report->tyre_year)
                                            <img src="/assets/ok.png" alt="">
                                        @else
                                            <img src="/assets/notOk.png" alt="">
                                        @endif
                                    </div>
                                    @if(!$report->tire_condition )
                                        Не в норме
                                    @elseif(date('Y')-3 > $report->tyre_year)
                                        Не проходное
                                    @else
                                        В норме
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
                                    {{ $report->tyre_year }}
                                </div>
                            </div>
                        </div>
                        @if ($report->tyre_preview)
                            <div class="tyres-photo">
                                <img src="{{ $report->tyre_preview }}" alt="" data-fancybox="demo"
                                     data-caption="Покрышки">
                            </div>
                        @endif
                    </div>
                @else
                    @php
                        $tire_voc = [
                            'front_left' => 'Передняя левая',
                            'front_right' => 'Передняя правая',
                            'back_left' => 'Задняя левая',
                            'back_right' => 'Задняя правая',
                        ];
                        function doesTireExist($name, $report) {
                            foreach ($report->tires as $tire_name => $tire ) {
                                if ($tire_name == $name) {
                                    return true;
                                }
                            }
                            return false;
                        }


                    @endphp
                    <div class="tyres-multiple">
                        @foreach($report->tires as $name => $tire)
                            <div class="tyres-multiple__item">
                                <div class="tyres-multiple__title">
                                    {{ $tire_voc[$name] }}
                                </div>
                                <div class="tyres-multiple__img">
                                    <svg width="52" height="110" viewBox="0 0 52 110" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M25.8872 1V5.87481M25.8872 1C29.8225 1.25499 32.9064 1.64835 35.6368 2.32529M25.8872 1C21.952 1.25499 18.868 1.64835 16.1376 2.32529M46.6693 7.41423C47.8485 8.18394 48.7379 10.9877 48.7219 15.6244M46.6693 7.41423C45.0371 6.34884 43.5328 5.45792 42.0511 4.71079M46.6693 7.41423H37.9459M48.7219 15.6244H42.5642M48.7219 15.6244C49.7481 15.6244 50.7744 15.881 50.7744 16.9073V33.5843C50.7744 34.0974 50.0047 34.6106 48.7219 34.6106M42.5642 15.6244C41.2813 15.6244 40.5116 16.1376 40.5116 16.9073V25.2458M42.5642 15.6244L37.9459 7.41423M48.7219 34.6106H42.5642C40.7682 34.6106 40.5116 34.0974 40.5116 33.5843V32.0449M48.7219 34.6106V76.4313M48.7219 76.4313H42.5642C42.1716 76.4313 41.827 76.4794 41.5379 76.5681M48.7219 76.4313C49.7481 76.4313 50.7744 76.6879 50.7744 77.7142V94.3912C50.7744 94.9043 50.0047 95.4174 48.7219 95.4174M48.7219 95.4174H42.5642C40.7682 95.4174 40.5116 94.9043 40.5116 94.3912V86.0527M48.7219 95.4174C48.7219 99.7791 48.57 101.658 46.9259 104.397C46.1562 105.68 35.7396 109.108 25.8872 109.016M25.8872 109.016V85.4112M25.8872 109.016C16.0348 109.108 5.61824 105.68 4.84854 104.397C3.20436 101.658 3.05255 99.7791 3.05255 95.4174M40.5116 25.2458L25.8872 24.6044M40.5116 25.2458V32.0449M25.8872 24.6044V29.9923M25.8872 24.6044V5.87481M25.8872 24.6044L11.2628 25.2458M40.5116 86.0527L25.8872 85.4112M40.5116 86.0527V83.8718M25.8872 85.4112V71.8131M25.8872 85.4112L11.2628 86.0527M25.8872 85.4112C17.8032 85.2919 13.9486 85.0861 11.2628 83.8718M25.8872 85.4112C33.0948 85.2773 36.6685 85.0571 40.5116 83.8718M25.8872 32.558C37.2277 33.5127 41.8235 34.9233 45.8996 39.4854C46.6693 40.3468 46.5804 44.105 44.8733 47.1824C43.847 49.0326 43.2354 49.5903 40.5116 48.4653C36.1635 46.6693 32.633 46.4299 25.8872 46.6693M25.8872 32.558V46.6693M25.8872 32.558V29.9923M25.8872 32.558C14.5467 33.5127 9.95094 34.9233 5.87481 39.4854C5.10511 40.3468 5.19401 44.105 6.90109 47.1824C7.92737 49.0326 8.53895 49.5903 11.2628 48.4653C15.6109 46.6693 19.1414 46.4299 25.8872 46.6693M25.8872 46.6693V71.8131M25.8872 71.8131H41.5379V76.5681M25.8872 71.8131H10.2365V76.5681M41.5379 76.5681C40.8823 76.7694 40.5116 77.18 40.5116 77.7142V83.8718M42.0511 4.71079C39.4164 4.92621 38.6328 5.61224 37.9459 7.41423M42.0511 4.71079C39.9659 3.65936 37.9255 2.8927 35.6368 2.32529M40.5116 32.0449C35.025 30.7398 31.8399 30.2474 25.8872 29.9923M25.8872 29.9923C19.9345 30.2474 16.7494 30.7398 11.2628 32.0449M25.8872 5.87481C36.1891 6.09846 42.0511 3.91551 35.6368 2.32529M25.8872 5.87481C15.5853 6.09846 9.72335 3.91551 16.1376 2.32529M5.10511 7.41423C3.92591 8.18394 3.03651 10.9877 3.05255 15.6244M5.10511 7.41423C6.73729 6.34884 8.24164 5.45792 9.72335 4.71079M5.10511 7.41423H13.8285M3.05255 15.6244H9.21021M3.05255 15.6244C2.02628 15.6244 1 15.881 1 16.9073V33.5843C1 34.0974 1.76971 34.6106 3.05255 34.6106M9.21021 15.6244C10.4931 15.6244 11.2628 16.1376 11.2628 16.9073V25.2458M9.21021 15.6244L13.8285 7.41423M3.05255 34.6106H9.21021C11.0062 34.6106 11.2628 34.0974 11.2628 33.5843V32.0449M3.05255 34.6106V76.4313M3.05255 76.4313H9.21021C9.60282 76.4313 9.94736 76.4794 10.2365 76.5681M3.05255 76.4313C2.02628 76.4313 1 76.6879 1 77.7142V94.3912C1 94.9043 1.76971 95.4174 3.05255 95.4174M3.05255 95.4174H9.21021C11.0062 95.4174 11.2628 94.9043 11.2628 94.3912V86.0527M11.2628 25.2458V32.0449M11.2628 86.0527V83.8718M10.2365 76.5681C10.8921 76.7694 11.2628 77.18 11.2628 77.7142V83.8718M9.72335 4.71079C12.358 4.92621 13.1416 5.61224 13.8285 7.41423M9.72335 4.71079C11.8085 3.65936 13.8489 2.8927 16.1376 2.32529M47.6956 42.8208C47.6367 58.7821 48.2198 71.6014 45.8996 73.3525C44.2031 69.2834 44.6466 65.1265 44.8733 58.4715C45.118 51.2875 46.1477 48.3271 47.6956 42.8208ZM4.07883 42.8208C4.13767 58.7821 3.55464 71.6014 5.87481 73.3525C7.5713 69.2834 7.12777 65.1265 6.90109 58.4715C6.65639 51.2875 5.62673 48.3271 4.07883 42.8208Z"
                                                stroke="#222222"/>
                                        @if($name == 'front_left')
                                            <path
                                                    d="M3.05255 15.6245H9.21021C10.4931 15.6245 11.2628 16.1376 11.2628 16.9074V25.2459V32.0449V33.5844C11.2628 34.0975 11.0062 34.6106 9.21021 34.6106H3.05255C1.76971 34.6106 1 34.0975 1 33.5844V16.9074C1 15.8811 2.02628 15.6245 3.05255 15.6245Z"
                                                    fill="#4E2EE1" fill-opacity="0.53" stroke="#482CD9"/>
                                        @endif
                                        @if($name == 'back_left')
                                            <path
                                                    d="M3.05255 76.4316H9.21021C10.4931 76.4316 11.2628 76.9448 11.2628 77.7145V86.053V92.8521V94.3915C11.2628 94.9046 11.0062 95.4178 9.21021 95.4178H3.05255C1.76971 95.4178 1 94.9046 1 94.3915V77.7145C1 76.6882 2.02628 76.4316 3.05255 76.4316Z"
                                                    fill="#4E2EE1" fill-opacity="0.53" stroke="#482CD9"/>
                                        @endif
                                        @if($name == 'front_right')
                                            <path
                                                    d="M48.7219 15.6245H42.5643C41.2814 15.6245 40.5117 16.1376 40.5117 16.9074V25.2459V32.0449V33.5844C40.5117 34.0975 40.7683 34.6106 42.5643 34.6106H48.7219C50.0048 34.6106 50.7745 34.0975 50.7745 33.5844V16.9074C50.7745 15.8811 49.7482 15.6245 48.7219 15.6245Z"
                                                    fill="#4E2EE1" fill-opacity="0.53" stroke="#482CD9"/>
                                        @endif
                                        @if($name == 'back_right')
                                            <path
                                                    d="M48.7219 76.4316H42.5643C41.2814 76.4316 40.5117 76.9448 40.5117 77.7145V86.053V92.8521V94.3915C40.5117 94.9046 40.7683 95.4178 42.5643 95.4178H48.7219C50.0048 95.4178 50.7745 94.9046 50.7745 94.3915V77.7145C50.7745 76.6882 49.7482 76.4316 48.7219 76.4316Z"
                                                    fill="#4E2EE1" fill-opacity="0.53" stroke="#482CD9"/>
                                        @endif
                                    </svg>

                                </div>
                                <div class="tyres-multiple__text">
                                    <div class="tyres-multiple__text-item">
                                        <div class="tyres-multiple__text-title">Производитель:</div>
                                        <div class="tyres-multiple__text-value">{{ $tire['manufacturer'] }}</div>
                                    </div>
                                    <div class="tyres-multiple__text-item">
                                        <div class="tyres-multiple__text-title">Состояние:</div>
                                        <div class="tyres-multiple__text-value">
                                            @if(!$tire['condition'] )
                                                Не в норме
                                            @elseif(date('Y')-3 > $tire['year'])
                                                Не проходное
                                            @else
                                                <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 1L5.6875 11L1 6.45455" stroke="#4E2EE1"
                                                          stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>
                                                В норме
                                            @endif
                                        </div>
                                    </div>
                                    <div class="tyres-multiple__text-item">
                                        <div class="tyres-multiple__text-title">Год выпуска:</div>
                                        <div class="tyres-multiple__text-value">{{ $tire['year'] }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @if(count($report->tires)<4)
                        <div class="tyres-multiple__item">
                            <div class="tyres-multiple__title">
                                Остальные
                            </div>
                            <div class="tyres-multiple__img">
                                <svg width="52" height="110" viewBox="0 0 52 110" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M25.8872 1V5.87481M25.8872 1C29.8225 1.25499 32.9064 1.64835 35.6368 2.32529M25.8872 1C21.952 1.25499 18.868 1.64835 16.1376 2.32529M46.6693 7.41423C47.8485 8.18394 48.7379 10.9877 48.7219 15.6244M46.6693 7.41423C45.0371 6.34884 43.5328 5.45792 42.0511 4.71079M46.6693 7.41423H37.9459M48.7219 15.6244H42.5642M48.7219 15.6244C49.7481 15.6244 50.7744 15.881 50.7744 16.9073V33.5843C50.7744 34.0974 50.0047 34.6106 48.7219 34.6106M42.5642 15.6244C41.2813 15.6244 40.5116 16.1376 40.5116 16.9073V25.2458M42.5642 15.6244L37.9459 7.41423M48.7219 34.6106H42.5642C40.7682 34.6106 40.5116 34.0974 40.5116 33.5843V32.0449M48.7219 34.6106V76.4313M48.7219 76.4313H42.5642C42.1716 76.4313 41.827 76.4794 41.5379 76.5681M48.7219 76.4313C49.7481 76.4313 50.7744 76.6879 50.7744 77.7142V94.3912C50.7744 94.9043 50.0047 95.4174 48.7219 95.4174M48.7219 95.4174H42.5642C40.7682 95.4174 40.5116 94.9043 40.5116 94.3912V86.0527M48.7219 95.4174C48.7219 99.7791 48.57 101.658 46.9259 104.397C46.1562 105.68 35.7396 109.108 25.8872 109.016M25.8872 109.016V85.4112M25.8872 109.016C16.0348 109.108 5.61824 105.68 4.84854 104.397C3.20436 101.658 3.05255 99.7791 3.05255 95.4174M40.5116 25.2458L25.8872 24.6044M40.5116 25.2458V32.0449M25.8872 24.6044V29.9923M25.8872 24.6044V5.87481M25.8872 24.6044L11.2628 25.2458M40.5116 86.0527L25.8872 85.4112M40.5116 86.0527V83.8718M25.8872 85.4112V71.8131M25.8872 85.4112L11.2628 86.0527M25.8872 85.4112C17.8032 85.2919 13.9486 85.0861 11.2628 83.8718M25.8872 85.4112C33.0948 85.2773 36.6685 85.0571 40.5116 83.8718M25.8872 32.558C37.2277 33.5127 41.8235 34.9233 45.8996 39.4854C46.6693 40.3468 46.5804 44.105 44.8733 47.1824C43.847 49.0326 43.2354 49.5903 40.5116 48.4653C36.1635 46.6693 32.633 46.4299 25.8872 46.6693M25.8872 32.558V46.6693M25.8872 32.558V29.9923M25.8872 32.558C14.5467 33.5127 9.95094 34.9233 5.87481 39.4854C5.10511 40.3468 5.19401 44.105 6.90109 47.1824C7.92737 49.0326 8.53895 49.5903 11.2628 48.4653C15.6109 46.6693 19.1414 46.4299 25.8872 46.6693M25.8872 46.6693V71.8131M25.8872 71.8131H41.5379V76.5681M25.8872 71.8131H10.2365V76.5681M41.5379 76.5681C40.8823 76.7694 40.5116 77.18 40.5116 77.7142V83.8718M42.0511 4.71079C39.4164 4.92621 38.6328 5.61224 37.9459 7.41423M42.0511 4.71079C39.9659 3.65936 37.9255 2.8927 35.6368 2.32529M40.5116 32.0449C35.025 30.7398 31.8399 30.2474 25.8872 29.9923M25.8872 29.9923C19.9345 30.2474 16.7494 30.7398 11.2628 32.0449M25.8872 5.87481C36.1891 6.09846 42.0511 3.91551 35.6368 2.32529M25.8872 5.87481C15.5853 6.09846 9.72335 3.91551 16.1376 2.32529M5.10511 7.41423C3.92591 8.18394 3.03651 10.9877 3.05255 15.6244M5.10511 7.41423C6.73729 6.34884 8.24164 5.45792 9.72335 4.71079M5.10511 7.41423H13.8285M3.05255 15.6244H9.21021M3.05255 15.6244C2.02628 15.6244 1 15.881 1 16.9073V33.5843C1 34.0974 1.76971 34.6106 3.05255 34.6106M9.21021 15.6244C10.4931 15.6244 11.2628 16.1376 11.2628 16.9073V25.2458M9.21021 15.6244L13.8285 7.41423M3.05255 34.6106H9.21021C11.0062 34.6106 11.2628 34.0974 11.2628 33.5843V32.0449M3.05255 34.6106V76.4313M3.05255 76.4313H9.21021C9.60282 76.4313 9.94736 76.4794 10.2365 76.5681M3.05255 76.4313C2.02628 76.4313 1 76.6879 1 77.7142V94.3912C1 94.9043 1.76971 95.4174 3.05255 95.4174M3.05255 95.4174H9.21021C11.0062 95.4174 11.2628 94.9043 11.2628 94.3912V86.0527M11.2628 25.2458V32.0449M11.2628 86.0527V83.8718M10.2365 76.5681C10.8921 76.7694 11.2628 77.18 11.2628 77.7142V83.8718M9.72335 4.71079C12.358 4.92621 13.1416 5.61224 13.8285 7.41423M9.72335 4.71079C11.8085 3.65936 13.8489 2.8927 16.1376 2.32529M47.6956 42.8208C47.6367 58.7821 48.2198 71.6014 45.8996 73.3525C44.2031 69.2834 44.6466 65.1265 44.8733 58.4715C45.118 51.2875 46.1477 48.3271 47.6956 42.8208ZM4.07883 42.8208C4.13767 58.7821 3.55464 71.6014 5.87481 73.3525C7.5713 69.2834 7.12777 65.1265 6.90109 58.4715C6.65639 51.2875 5.62673 48.3271 4.07883 42.8208Z"
                                            stroke="#222222"/>
                                    @if( !doesTireExist('front_left', $report))
                                        <path
                                                d="M3.05255 15.6245H9.21021C10.4931 15.6245 11.2628 16.1376 11.2628 16.9074V25.2459V32.0449V33.5844C11.2628 34.0975 11.0062 34.6106 9.21021 34.6106H3.05255C1.76971 34.6106 1 34.0975 1 33.5844V16.9074C1 15.8811 2.02628 15.6245 3.05255 15.6245Z"
                                                fill="#4E2EE1" fill-opacity="0.53" stroke="#482CD9"/>
                                    @endif
                                    @if(!doesTireExist('back_left', $report))
                                        <path
                                                d="M3.05255 76.4316H9.21021C10.4931 76.4316 11.2628 76.9448 11.2628 77.7145V86.053V92.8521V94.3915C11.2628 94.9046 11.0062 95.4178 9.21021 95.4178H3.05255C1.76971 95.4178 1 94.9046 1 94.3915V77.7145C1 76.6882 2.02628 76.4316 3.05255 76.4316Z"
                                                fill="#4E2EE1" fill-opacity="0.53" stroke="#482CD9"/>
                                    @endif
                                    @if(!doesTireExist('front_right', $report))
                                        <path
                                                d="M48.7219 15.6245H42.5643C41.2814 15.6245 40.5117 16.1376 40.5117 16.9074V25.2459V32.0449V33.5844C40.5117 34.0975 40.7683 34.6106 42.5643 34.6106H48.7219C50.0048 34.6106 50.7745 34.0975 50.7745 33.5844V16.9074C50.7745 15.8811 49.7482 15.6245 48.7219 15.6245Z"
                                                fill="#4E2EE1" fill-opacity="0.53" stroke="#482CD9"/>
                                    @endif
                                    @if(!doesTireExist( 'back_right', $report))
                                        <path
                                                d="M48.7219 76.4316H42.5643C41.2814 76.4316 40.5117 76.9448 40.5117 77.7145V86.053V92.8521V94.3915C40.5117 94.9046 40.7683 95.4178 42.5643 95.4178H48.7219C50.0048 95.4178 50.7745 94.9046 50.7745 94.3915V77.7145C50.7745 76.6882 49.7482 76.4316 48.7219 76.4316Z"
                                                fill="#4E2EE1" fill-opacity="0.53" stroke="#482CD9"/>
                                    @endif
                                </svg>

                            </div>
                            <div class="tyres-multiple__text">
                                <div class="tyres-multiple__text-item">
                                    <div class="tyres-multiple__text-title">Производитель:</div>
                                    <div class="tyres-multiple__text-value">{{ $report->tyre_manufacturer }}</div>
                                </div>
                                <div class="tyres-multiple__text-item">
                                    <div class="tyres-multiple__text-title">Состояние:</div>
                                    <div class="tyres-multiple__text-value">
                                        @if ($report->tire_condition)
                                            <svg width="17" height="12" viewBox="0 0 17 12" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 1L5.6875 11L1 6.45455" stroke="#4E2EE1" stroke-width="2"
                                                      stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            В норме
                                        @else
                                            Не в норме
                                        @endif
                                    </div>
                                </div>
                                <div class="tyres-multiple__text-item">
                                    <div class="tyres-multiple__text-title">Год выпуска:</div>
                                    <div class="tyres-multiple__text-value">{{ $report->tyre_year }}</div>
                                </div>
                            </div>
                        </div>

                            @endif
                    </div>
                    <div class="tires-images">
                    @foreach($report->tires as $tire)
                        <!-- TIRE -->
                            @if(isset($tire['photo']) && $tire['photo'])
                                <img src="{{ $tire['photo'] }}" alt="">
                            @endif
                        @endforeach
                    <!-- TIRE main -->
                        @if(isset($report->tyre_preview) && $report->tyre_preview)

                            <img src="{{ $report->tyre_preview }}" alt="">
                        @endif

                    </div>
                @endif

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
                @if($report->comment_computer_diag)
                    <p>
                        Компьютерная диагностика: {{ $report->comment_computer_diag }}
                    </p>
                @endif
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
                                <img src="{{ $photo['photo'] }}" alt="slide" data-fancybox="demo"
                                     data-caption="Фотоотчет">
                            </div>
                        </div>
                    @endforeach
                    @foreach($report->photo_internal as $photo)
                        <div class="slide">
                            <div class="slide__image">
                                <img src="{{ $photo['photo'] }}" alt="slide" data-fancybox="demo"
                                     data-caption="Фотоотчет">
                            </div>

                        </div>
                    @endforeach

                </div>
                <div class="report__slider slider-nav">
                    @foreach($report->photo_external as $photo)

                        <div class="slide">
                            <div class="slide__image-wrapper">
                                <img src="{{ $photo['photo'] }}" alt="slide">
                            </div>
                        </div>
                    @endforeach
                    @foreach($report->photo_internal as $photo)

                        <div class="slide">
                            <div class="slide__image-wrapper">
                                <img src="{{ $photo['photo'] }}" alt="slide">
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
@if($report->computer_diag)
<section class="diagnostic">
    <div class="container">
        <div class="diagnostic-results">
            <div class="diagnostic-results__img">
                <svg width="131" height="126" viewBox="0 0 131 126" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M72.8819 0.877686H63.3275V125.5H72.8819V107.222H100.714L116.915 93.0982H123.146V98.4985H138.516L143.086 93.0982V51.142L138.516 46.5726H123.146V53.2191H116.915V44.9109H100.714L90.7445 34.5257H75.7898V30.3716H90.7445V19.9864H72.8819V0.877686Z"
                            fill="white"/>
                    <path
                            d="M57.9272 19.9864H38.4031V30.3716H53.3577V33.6949H38.8185L31.3411 47.8188H15.971V62.7735H11.4016V47.8188H0.185547V71.9124H2.67799V93.5136H11.4016V78.559H15.971V93.5136L30.0949 93.929L41.7263 106.391H57.9272V100.576H45.0496L32.1719 86.8671H23.033V54.4653H35.0798L42.5571 40.3414H57.9272V19.9864Z"
                            fill="white"/>
                </svg>
            </div>
            <div class="diagnostic-results__text">Результаты компьютерной диагностики</div>

            <a href="{{$report->computer_diag}}" target="_blank" class="diagnostic-results__btn">
                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M4.89144 12.8676C4.89144 12.5355 4.66097 12.3374 4.25432 12.3374C4.08827 12.3374 3.97581 12.3538 3.91699 12.3695V13.4351C3.98664 13.4508 4.07226 13.456 4.19027 13.456C4.62372 13.456 4.89144 13.2371 4.89144 12.8676Z"
                            fill="black"/>
                    <path
                            d="M7.4087 12.3486C7.2266 12.3486 7.10891 12.3644 7.03931 12.3807V14.7408C7.10895 14.7571 7.22141 14.7571 7.32308 14.7571C8.06183 14.7624 8.54364 14.3557 8.54364 13.4941C8.54887 12.7448 8.10983 12.3486 7.4087 12.3486Z"
                            fill="black"/>
                    <path
                            d="M12.0858 0.000244141H4.05294C2.87942 0.000244141 1.92431 0.956025 1.92431 2.12888V10.0002H1.7164C1.24276 10.0002 0.858643 10.3839 0.858643 10.858V16.06C0.858643 16.534 1.24272 16.9177 1.7164 16.9177H1.92431V17.8716C1.92431 19.0457 2.87942 20.0002 4.05294 20.0002H15.0134C16.1861 20.0002 17.1414 19.0457 17.1414 17.8716V5.03816L12.0858 0.000244141ZM3.1089 11.7968C3.36028 11.7543 3.71362 11.7223 4.21145 11.7223C4.71454 11.7223 5.0731 11.8183 5.31403 12.0112C5.54417 12.193 5.69948 12.493 5.69948 12.8461C5.69948 13.1991 5.58179 13.4992 5.36767 13.7025C5.08916 13.9647 4.67728 14.0824 4.19547 14.0824C4.08824 14.0824 3.99213 14.0771 3.91697 14.0667V15.3566H3.1089V11.7968ZM15.0134 18.6966H4.05294C3.59855 18.6966 3.22854 18.3266 3.22854 17.8716V16.9177H13.4459C13.9196 16.9177 14.3037 16.534 14.3037 16.06V10.858C14.3037 10.3839 13.9196 10.0002 13.4459 10.0002H3.22854V2.12888C3.22854 1.67515 3.59859 1.30513 4.05294 1.30513L11.5981 1.29725V4.08619C11.5981 4.90081 12.259 5.5624 13.0743 5.5624L15.8063 5.55456L15.8371 17.8715C15.8371 18.3266 15.4677 18.6966 15.0134 18.6966ZM6.22053 15.3402V11.7968C6.52024 11.7491 6.91087 11.7223 7.32311 11.7223C8.00823 11.7223 8.4525 11.8452 8.80061 12.1073C9.17523 12.3858 9.41056 12.8298 9.41056 13.4671C9.41056 14.1575 9.15918 14.6341 8.81102 14.9283C8.43117 15.244 7.85296 15.3938 7.14657 15.3938C6.72354 15.3938 6.42383 15.367 6.22053 15.3402ZM12.0623 13.2423V13.9058H10.7668V15.3566H9.94795V11.7491H12.1531V12.4178H10.7668V13.2423H12.0623Z"
                            fill="black"/>
                </svg>

                Посмотреть отчёт
            </a>
        </div>
    </div>
</section>
@endif
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
{{--                        @if($report->tire_condition && date('Y')-3 <= $report->tyre_year)--}}
{{--                            <img src="/assets/ok.png" alt="">--}}
{{--                        @else--}}
{{--                            <img src="/assets/notOk.png" alt="">--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    @if($report->tire_condition && date('Y')-3 <= $report->tyre_year)--}}
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
{{--                    {{ $report->tyre_year }}--}}

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

        @php

            $translations_damage = array(
              "scratch" => "Царапина",
              "chip" => "Скол",
              "dent" => "Вмятина",
              "rust" => "Ржавчина",
              "disassembly_marks" => "Следы демонтажа",
              "deformation" => "Деформация"
            );

        $name_voc = [
    'bumper_front' => 'Передний бампер',
    'front_left_rack' => 'Передняя левая стойка',
    'fenderfrontright' => 'Переднее правое крыло',
    'hood' => 'Капот',
    'front_right_rack' => 'Передняя правая стойка',
    'doorfrontright' => 'Передняя правая дверь',
    'middle_right_rack' => 'Средняя правая стойка',
    'doorbackright' => 'Задняя правая дверь',
    'back_right_rack' => 'Задняя правая стойка',
    'fenderbackright' => 'Заднее правое крыло',
    'hoodback' => 'Задний бампер',
    'trunk' => 'Крышка багажника',
    'roof' => 'Крыша',
    'fenderfrontleft' => 'Переднее левое крыло',
    'doorfrontleft' => 'Передняя левая дверь',
    'doorbackleft' => 'Задняя левая дверь',
    'middle_left_rack' => 'Средняя левая стойка',
    'back_left_rack' => 'Задняя левая стойка',
    'fenderbackleft' => 'Заднее левое крыло',
];

        @endphp
        @if(count(array_merge($report->photo_external_damage, $report->photo_internal_damage))>0)
            <div class="flex ">

                @foreach((array_merge($report->photo_external_damage, $report->photo_internal_damage)) as $badPart)
                    @isset($badPart['photo'])
                        <div class="components__item item">
                            <img class="item__image" src="{{ $badPart['photo'] }}" alt="photo" data-fancybox="demo"
                                 data-caption="@if( isset( $badPart['name'] ) && array_key_exists( $badPart['name'], $name_voc)) {{ $name_voc[$badPart['name']] }}@else Повреждение @endif
                                 @isset( $badPart['description'] ) – {{ $badPart['description'] }}@endif">
                            <div class="item__desc">
                                @if( isset( $badPart['name'] ) && array_key_exists( $badPart['name'], $name_voc)){{ $name_voc[$badPart['name']] }}:@else Повреждение: @endif
                                    @isset( $badPart['description'] ){{ $badPart['description'] }} @endif
                            </div>
                        </div>
                    @endif
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
                    $_mD = date_create( (($report->updated_at  && $report->updated_at != $report->created_at) ? $report->updated_at : $report->created_at))->format('-m-');

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

