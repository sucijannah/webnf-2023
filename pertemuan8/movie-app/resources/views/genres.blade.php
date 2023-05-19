@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres Data</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Genres Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Gendre</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Gendre</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Avengers</td>
                        <td>
                            Avengers, adalah film Amerika superhero (2012) yang diproduksi oleh Marvel Studios dan didistribusikan oleh Walt Disney Studios Motion Pictures yang mengadaptasi pada Marvel Comics dengan nama tim superhero yang sama. Ini adalah film keenam di Marvel Cinematic Universe.
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> The Godfather</td>
                        <td>The Godfather bercerita tentang kisah keluarga mafia terkuat di New York yang dipimpin oleh seorang pria keturunan Italia bernama Vito Corleone yang kerap dipanggil Don Corleone. Di bawah kekuasaannya, grup Corleone menjadi "raja" di balik bayang-bayang kota New York</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>parasite</td>
                        <td>Parasite sendiri bercerita tentang keluarga Kim Ki Taek (Song Kang Ho) yang awalnya hidup serba pas-pasan. Mereka tinggal di rumah semi basement dan bekerja sebagai pelipat kotak pizza. Suatu hari anak laki-lakinya, Kim Ki Woo (Choi Woo Shik) dipercaya menjadi tutor private untuk seorang gadis dari keluarga kaya</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>the dark knight</td>
                        <td>the dark knight bercerita tentang kondisi kota gotham saat diserang berbagai teror. Batman (Christian Bale) dibantu oleh letnan Jim Gordon (Gary Oldman) dan jaksa Harvey Dent (Aaron Eckhart) mencoba meredam kejahatan yang merajalela di jalanan</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Forrest Gump</td>
                        <td>Forrest Gump menceritakan tentang kehidupan seorang pria bernama Forrest Gump (diperankan oleh Tom Hanks) dari awal tahun 1950-an hingga akhir 1980-an. Forrest adalah seorang pria yang memiliki IQ yang rendah, tetapi memiliki hati yang besar dan tekad yang kuat.11</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection