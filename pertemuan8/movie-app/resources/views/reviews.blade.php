@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews Data</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>The Shawshank Redmption</td>
                        <td>John Doe</td>
                        <td>9.5</td>
                        <td>The movie is a masterpiece. the acting, the storyline, and the ending are all fantastic</td>
                        <td>2022-03-12</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> parasite</td>
                        <td> Mark johnson</td>
                        <td> 9.0</td>
                        <td> This movie is a gripping social commentary that is both humorous and thought-provoking Highly recommended</td>
                        <td> 2022-05-01</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> inception</td>
                        <td> Jane smith</td>
                        <td> 8.9</td>
                        <td> Dominick ‘Dom’ Cobb (Leonardo DiCaprio) terdampar di pesisir pantai yang diperkirakan berada di dataran Jepang. Setelah sekelompok militan menyelematkannya, Dom kemudian berbincang-bincang dengan seorang pria tua renta, lantas dengan cepat kita dibawa pada pertemuan Dom dan Arthur (Joseph Gordon-Levitt) dengan seorang pria bernama Mr. Saito (Ken Watanabe).</td>
                        <td>2022-04-23</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Avengers</td>
                        <td>Joss whedon</td>
                        <td>9.0</td>
                        <td>film yang dihadirkan dengan konflik drama dari beberapa tokoh didalamnya, adanya aksi laga pertarungan dan dibumbui dengan sesuatu yang lucu.</td>
                        <td>2012-03-04</td
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td> Forrest Gump</td>
                        <td> Robert zemeckis</td>
                        <td> 8.7</td>
                        <td> Film laga pertarungan dan kisah percintaan tokoh utama.</td>
                        <td> 2020-09-08</td>
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