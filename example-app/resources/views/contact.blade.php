@extends('layouts.app')
@section('title')Contact
@endsection


@section('content')
    <h1>Заголовок страницы</h1>
    Как бы ни была востребована проза, стихи и поэзия всегда находили куда более преданную и экспрессивную историю. Ведь они цепляют за душу и оставляют глубокий след в каждом читателе! Порой кажется, что без поэзии мировая литература потеряла бы добрую часть своей прелести. Действительно, поэты дарят своим современникам и потомкам целую гамму чувств и переживаний. Посредством стихов они выражают свои взгляды на мир, на человеческие отношения. В стихах есть все – от любви и страсти до страданий и боли, от жизнелюбия и радости до войны и смерти. Стихи многогранны и безграничны, а творчество каждого поэта можно изучать на протяжении всей жизни. Если вам хочется устроить поэтический вечер, заходите в библиотеку MyBook, чтобы читать онлайн стихи русских и зарубежных поэтов.
    // Проверка ошибок передачи формы в обработчик через контроллер
    @if($errors->any()) {{-- //Проверка на наличие ошибок, обращаюсь к объекту $errors и проверяю функцию any()--}}
        <div class="alert alert-danger">{{--// Для вывода ошибок использую блок от бутстрап, стилизированый.--}}
            <ul>{{--// вывожу через список, не нумерованный--}}
               @foreach($errors->all() as $error) {{-- // вывожу ошибки через цикл foreach, можно и через for, while, forelse. Обращаюсь через объект $errors ко всем его сообщениям --}}
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Entre email</label>
            <input type="email" name="email" placeholder="Entre email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Entre name</label>
            <input type="text" name="name" placeholder="Entre name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Entre subject</label>
            <input type="text" name="subject" placeholder="Entre subject" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="massage">Entre massage</label>
            <textarea name="massage" placeholder="Entre massage" id="massage" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>

    </form>
@endsection
