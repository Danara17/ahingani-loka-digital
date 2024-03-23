<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ahingani Loka Digital | Master Jenis Web</title>
</head>
<body>
    @if(Session::get('success'))
       <script>alert("{{Session::get('success')}}")</script> 
    @endif
    <form action="/master_jenis_web" method="POST">
        @csrf
        <div style="margin-bottom: 20px">
            <label for="jenis_web" style="display: block">Jenis Web</label>
            <input id="jenis_web" type="text" name="jenis_web">
        </div>
        <div style="margin-bottom: 20px">
            <label for="fitur" style="display: block">Ambil Fitur Yang Tersedia</label>
            @foreach ($dataFitur as $fitur)
            <span>
                <input type="radio" name="fitur" value="{{$fitur->id}}">
                <label for="fitur">{{$fitur->nama_fitur}}</label>
            </span>
            @endforeach  
        </div>
        <h5>Request Fitur</h5>
        <div id="fitur_wrapper" style="margin-bottom: 20px; display: block">
            <label for="fitur_default_1" style="display: block">Fitur Default</label>
            <input id="fitur_default_1" type="text" name="fitur_default_1" >
        </div>
        <div style="margin-bottom: 20px">
            <label for="harga" style="display: block">Harga</label>
            <input id="harga" type="text" name="harga">
        </div>
        <button type="button" onclick="addInput()">+ tambah fitur</button>
        <button type="submit">Save</button>
    </form>
</body>
<script>
    let counter = 1; // Counter untuk menambah nomor urutan input

    function addInput(){
        counter++; // Menaikkan nilai counter setiap kali tombol ditekan
        
        // Membuat elemen input baru
        let newInput = document.createElement('input');
        newInput.setAttribute('type', 'text');
        newInput.setAttribute('name', 'fitur_default_' + counter);

        // Membuat elemen label baru
        let newLabel = document.createElement('label');
        newLabel.setAttribute('placeholder', 'fitur ' + counter);

        // Menambahkan input baru ke dalam div dengan id 'fitur_wrapper'
        let fiturWrapper = document.getElementById('fitur_wrapper');
        fiturWrapper.appendChild(newLabel);
        fiturWrapper.appendChild(newInput);
    }
</script>
</html>
