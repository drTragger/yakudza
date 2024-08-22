@extends('layouts.app')
@section('title', 'Yakudza Cars')

@section('content')
    <section id="hero" class="py-3" style="background-image: url('{{ asset('storage/images/backgrounds/hero.png') }}')">
        <div class="container">
            <div class="d-flex d-md-block justify-content-between mb-3">
                <img class="img-fluid" src="{{ asset('storage/images/logo.svg') }}" alt="Logo">
                <div class="d-flex d-md-none flex-column mr-4">
                    <div class="d-flex justify-content-center mt-3">
                        <a href="mailto:yakudzaworkua@gmail.com" class="mr-3">
                            <img class="img-fluid" src="{{ asset('storage/icons/mobile/email.svg') }}" alt="Email">
                        </a>
                        <a href="https://t.me/yakudzaoffer" class="mr-3">
                            <img class="img-fluid" src="{{ asset('storage/icons/mobile/telegram.svg') }}" alt="Telegram">
                        </a>
                        <a href="https://www.instagram.com/yakudza_cars_uk/" class="mr-3">
                            <img class="img-fluid" src="{{ asset('storage/icons/mobile/instagram.svg') }}" alt="Instagram">
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61563981977021">
                            <img class="img-fluid" src="{{ asset('storage/icons/mobile/facebook.svg') }}" alt="Facebook">
                        </a>
                    </div>
                    <a class="d-block text-center m-auto phone-number" href="tel:+380634334877" style="font-size: 14px">
                        +38 (063) 4334 877
                    </a>
                </div>
            </div>
            <h1 class="mb-4 mb-md-3">АВТО із США, Європи,<br>Канади та Кореї.</h1>
            <h4 class="mb-3">
                Отримайте авто з вигодою до 40% від ринкової ціни в Україні<br>
                Заповніть інформацію нижче і отримайте професійну консультацію від нашого спеціаліста
            </h4>
            <div class="row align-items-center mt-5">
                <div class="col-12 col-md-6 d-flex d-md-block justify-content-center">
                    <button id="scrollButton" class="btn btn-grey">Підібрати авто</button>
                </div>
                <div class="col-6 d-none d-md-block">
                    <img class="img-fluid" src="{{ asset('storage/images/lamborghini.png') }}" alt="Lamborghini">
                </div>
            </div>
        </div>
    </section>

    <form action="{{ route('form.submit') }}" method="POST">
        @csrf

        <section id="bodyType" class="bottom-line pt-3 pb-5">
            <div class="container pb-5">
                <h3 class="text-center mb-5 subtitle">Пройдіть невеликий тест для підбору авто</h3>
                <h4 class="text-center mb-4 subtitle">Тип кузова</h4>
                @error('bodyType')
                <div class="text-center text-danger mb-4">
                    {{ $message }}
                </div>
                @enderror
                <div class="row justify-content-between">
                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="bodyType" value="{{ \App\Enums\BodyType::universal->value }}">
                            <img src="{{ asset('storage/images/body-type/universal.png') }}"
                                 alt="{{ \App\Enums\BodyType::universal->value }}">
                            <span class="subtitle">{{ \App\Enums\BodyType::universal->value }}</span>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="bodyType" value="{{ \App\Enums\BodyType::jeep->value }}">
                            <img src="{{ asset('storage/images/body-type/jeep.png') }}"
                                 alt="{{ \App\Enums\BodyType::jeep->value }}">
                            <span class="subtitle">{{ \App\Enums\BodyType::jeep->value }}</span>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="bodyType" value="{{ \App\Enums\BodyType::suv->value }}">
                            <img src="{{ asset('storage/images/body-type/suv.png') }}"
                                 alt="{{ \App\Enums\BodyType::suv->value }}">
                            <span class="subtitle">{{ \App\Enums\BodyType::suv->value }}</span>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="bodyType" value="{{ \App\Enums\BodyType::sedan->value }}">
                            <img src="{{ asset('storage/images/body-type/sedan.png') }}"
                                 alt="{{ \App\Enums\BodyType::sedan->value }}">
                            <span class="subtitle">{{ \App\Enums\BodyType::sedan->value }}</span>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="bodyType" value="{{ \App\Enums\BodyType::notSure->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center"
                                 style="font-size: 96px">
                                ?
                            </div>
                            <span class="subtitle">{{ \App\Enums\BodyType::notSure->value }}</span>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="bodyType" value="{{ \App\Enums\BodyType::hatchback->value }}">
                            <img src="{{ asset('storage/images/body-type/hatchback.png') }}"
                                 alt="{{ \App\Enums\BodyType::hatchback->value }}">
                            <span class="subtitle">{{ \App\Enums\BodyType::hatchback->value }}</span>
                        </label>
                    </div>
                </div>
            </div>
        </section>

        <section id="fuelType" class="bottom-line py-5">
            <div class="container py-5">
                <h4 class="text-center mb-4 subtitle">Тип палива</h4>
                @error('fuelType')
                <div class="text-center text-danger mb-4">
                    {{ $message }}
                </div>
                @enderror
                <div class="row justify-content-between">
                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="fuelType" value="{{ \App\Enums\FuelType::petrol->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\FuelType::petrol->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="fuelType" value="{{ \App\Enums\FuelType::gas->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\FuelType::gas->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="fuelType" value="{{ \App\Enums\FuelType::diesel->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\FuelType::diesel->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="fuelType" value="{{ \App\Enums\FuelType::electric->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\FuelType::electric->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="fuelType" value="{{ \App\Enums\FuelType::notSure->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\FuelType::notSure->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="fuelType" value="{{ \App\Enums\FuelType::hybrid->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\FuelType::hybrid->value }}
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </section>

        <section id="budget" class="bottom-line py-5">
            <div class="container py-5">
                <h4 class="text-center mb-4 subtitle">Бюджет</h4>
                @error('budget')
                <div class="text-center text-danger mb-4">
                    {{ $message }}
                </div>
                @enderror
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="budget" value="{{ \App\Enums\Budget::less8K->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\Budget::less8K->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="budget" value="{{ \App\Enums\Budget::less12K->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\Budget::less12K->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="budget" value="{{ \App\Enums\Budget::less15K->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\Budget::less15K->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="budget" value="{{ \App\Enums\Budget::less20K->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\Budget::less20K->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="budget" value="{{ \App\Enums\Budget::less30K->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\Budget::less30K->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center mb-5">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="budget" value="{{ \App\Enums\Budget::more30K->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\Budget::more30K->value }}
                            </div>
                        </label>
                    </div>

                    <div class="col-6 col-md-4 d-flex justify-content-center">
                        <label class="option d-flex flex-column align-items-center text-center p-1">
                            <input type="radio" name="budget" value="{{ \App\Enums\Budget::notSure->value }}">
                            <div class="option-button d-flex justify-content-center align-items-center">
                                {{ \App\Enums\Budget::notSure->value }}
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacts" class="bottom-line py-5">
            <div class="container py-5">
                <h3 class="text-center subtitle mb-5">
                    Вкажіть Ваші контактні дані для отримання результату підбору та персонального подарунку, для кожного
                    клієнта компанії
                </h3>

                <div class="m-auto name-phone-container">
                    <div class="form-group">
                        <label for="name">Ваше імʼя</label>
                        <input type="text" name="name" class="form-control rounded-pill @error('name') is-invalid @enderror" id="name"
                               placeholder="Введіть ваше імʼя">
                        @error('name')
                            <div class="text-danger small mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">Ваш номер телефону</label>
                        <input type="tel" name="phone" class="form-control rounded-pill @error('phone') is-invalid @enderror" id="phone"
                               placeholder="Введіть ваш номер телефону">
                        @error('phone')
                        <div class="text-danger small mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="w-100 d-flex justify-content-center mt-5">
                        <button type="submit" class="btn rounded-pill w-50 py-2">Відправити</button>
                    </div>
                </div>

                <div class="w-100 d-flex justify-content-center mt-5 pt-5">
                    <img class="img-fluid logo-2" src="{{ asset('storage/images/logo-2.png') }}" alt="Logo">
                </div>
            </div>
        </section>
    </form>
@endsection
