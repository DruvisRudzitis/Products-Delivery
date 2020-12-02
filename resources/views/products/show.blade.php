@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <h1>{{ $product->name }}</h1>
        <p>
            Price: <b>{{ $product->getPrice() }}</b>
            Size: <b>{{ $product->getSize() }}</b>
            Weight: <b>{{ $product->getWeight() }}</b>
        </p>
        <ul>

        </ul>
        <FORM name ="form1" method ="post" action ="radioButton.php">


            @foreach($product->deliveries as $delivery)
                <Input type = 'Radio' Name ='gender' value= 'male'>
                <li>{{ $delivery->name }} {{ $delivery->getPrice() }}</li>
            @endforeach

            <P>
                <Input type = "Submit" Name = "Submit1" VALUE = "Select Delivery">

        </FORM>
    </div>
</div>
@endsection


