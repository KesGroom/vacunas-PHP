@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card" style="width: 70%;">
                <img src="{{ asset('storage/medico.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">¿Eres una EPS?</h5>
                    <p class="card-text">Tu entidad debe estar registrada en nuestro sistema para poder brindar toda la información posible a los usuarios</p>
                    <a href="#eps" class="btn btn-outline-info btn-block">Más información</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 70%;">
                <img src="{{ asset('storage/vacuna.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">¿Necesitas consultar tus vacunas?</h5>
                    <p class="card-text">CVV es la nueva herramienta que te ofrece el gobierno colombiano para consultar tu historial de vacunación.</p>
                    <a href="#vc" class="btn btn-outline-info btn-block">Más información</a>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid mt-4 mb-4" id="qs">
        <div class="container">
            <h1 class="display-4">¿Quienes somos?</h1>
            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, voluptatem? Corporis itaque maiores eos, facere commodi, voluptates tempora architecto ad vitae temporibus distinctio, perferendis earum. Maiores quibusdam quaerat, delectus sunt perspiciatis saepe soluta nobis sed ratione et aperiam repudiandae facilis. Libero eos doloribus repellat quas.</p>
            <br>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas minima omnis laboriosam est quam ex rem autem quisquam. Vel, harum explicabo animi sit neque inventore hic deserunt ex incidunt eaque, non modi dolorem corporis! Quidem placeat cumque voluptatem repudiandae asperiores ullam, iusto sit! Soluta nam vitae eos eligendi cumque numquam tempore! Placeat autem sapiente rerum dignissimos tempore deserunt, eaque reiciendis iure vel a rem voluptates ab veritatis facilis quisquam consequatur? Laborum, ut! Ullam alias perspiciatis voluptatibus voluptatem quam quaerat numquam facilis necessitatibus nemo mollitia itaque corrupti dolores, magnam cumque. Enim quos pariatur nostrum commodi odio culpa vel perspiciatis doloremque est, mollitia debitis, iure ex. Aspernatur eos ut ad odio eaque optio illum quasi culpa maxime, ratione debitis blanditiis earum repellendus enim excepturi eligendi, voluptatem reiciendis.</p>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid mt-4" id="eps">
        <div class="container">
            <h1 class="display-4">Es obligatorio ser parte de CVV</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae vitae nobis magni illum dolore velit tempora. Beatae, deserunt accusamus nulla, praesentium ea repellat vero facere doloremque obcaecati, aliquid molestias quidem.</p>
            <br>
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates in accusamus vel vitae velit quis ab autem maiores facere alias consequuntur ipsa iusto saepe corporis, iste ratione est? Eum provident facilis quos explicabo? Ex facilis totam quasi quod deleniti accusantium officiis, omnis rerum repudiandae repellendus nobis impedit sunt animi sapiente nam fugit eius cupiditate, quam libero perferendis, nostrum dolorum hic fugiat. Beatae quo eligendi aspernatur earum dolorum consectetur delectus velit, officiis facere corporis repudiandae repellat deserunt magni! Delectus, veniam quibusdam!</p>
            <hr class="my-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non deserunt temporibus fugiat amet explicabo maxime.</p>
            <a class="btn btn-outline-info btn-lg btn-block" href="{{ asset('User/index2') }}" role="button">Registrese</a>

        </div>
    </div>

    <div class="jumbotron jumbotron-fluid mt-4" id="vc">
        <div class="container">
            <h1 class="display-4">Estamos para ofrecer información</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae vitae nobis magni illum dolore velit tempora. Beatae, deserunt accusamus nulla, praesentium ea repellat vero facere doloremque obcaecati, aliquid molestias quidem.</p>
            <br>
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates in accusamus vel vitae velit quis ab autem maiores facere alias consequuntur ipsa iusto saepe corporis, iste ratione est? Eum provident facilis quos explicabo? Ex facilis totam quasi quod deleniti accusantium officiis, omnis rerum repudiandae repellendus nobis impedit sunt animi sapiente nam fugit eius cupiditate, quam libero perferendis, nostrum dolorum hic fugiat. Beatae quo eligendi aspernatur earum dolorum consectetur delectus velit, officiis facere corporis repudiandae repellat deserunt magni! Delectus, veniam quibusdam!</p>
            <hr class="my-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non deserunt temporibus fugiat amet explicabo maxime.</p>
            <a class="btn btn-outline-info btn-lg btn-block" href="{{ asset('User/index') }}" role="button">consultar vacunas</a>

        </div>
    </div>

</div>
@endsection