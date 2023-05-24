@include('header')
@extends('base')
@section('content')

    <div>
        <center>
            <img src="https://c4.wallpaperflare.com/wallpaper/11/624/62/simple-desk-clocks-books-wallpaper-preview.jpg"
                alt="image" style="width: 300px;height:200px">
        </center>
        <h1>
            <font face="WildWest" color="#241C93">
                <center>Welcome to HomePage</center>
            </font>
        </h1>
    </div>

    <br>
    <br>
    <br>

    <center>
        <table>
            <tr>
                <td>
                    <div class="card" style="width:400px;height:300px">
                        <img src="https://c0.wallpaperflare.com/preview/751/2/550/chart-graph-business-finance.jpg"
                            alt="Department" style="width:400px;height:300px">
                        <div class="container">
                            <h4><b>
                                    <a href="{{ route('departments.index') }}"style="color:#352CB9" >
                                        Department Page </a>
                                </b>
                            </h4>
                        </div>
                </td>
                <td>
                    <div class="card" style="width:400px;height:300px">
                        <img src="https://c1.wallpaperflare.com/preview/395/814/346/bible-holy-book-christianity-thumbnail.jpg"
                            alt="Subject" style="width:400px;height:300px">
                        <div class="container">
                            <h4><b>
                                    <a href="{{ route('subjects.index') }}"style="color: #352CB9" >
                                        Subject Page </a>
                                </b>
                            </h4>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="card" style="width:400px;height:300px">
                        <img src="https://c1.wallpaperflare.com/preview/1015/820/870/birger-kollmeier-professor-blackboard-physics.jpg"
                            alt="Doctor" style="width:400px;height:300px">
                        <div class="container">
                            <h4><b>
                                    <a href="{{ route('doctors.index') }}" style="color:#352CB9"> Doctor Page </a>
                                </b>
                            </h4>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="card" style="width:400px;height:300px">
                        <img src="https://c1.wallpaperflare.com/preview/48/343/700/library-study-homework-education.jpg"
                            alt="Student" style="width:400px;height:267px">
                        <div class="container">
                            <h4><b>
                                    <a href="{{ route('students.index') }}"style="color: #352CB9"> Student Page </a>
                                </b>
                            </h4>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </center>