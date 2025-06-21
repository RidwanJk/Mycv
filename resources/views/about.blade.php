<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'About Me')

@section('content')
    <main>
        {{-- --}}
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>BIOGRAPHY
                            </h1>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p><span class="label"><i class="bi bi-person"></i> Nama:</span> Ridwan Jauhar
                                        Kafabihi</p>
                                    <p><span class="label"><i class="bi bi-geo-alt"></i> Alamat:</span> Malang, Jawa
                                        Timur</p>
                                    <p><span class="label"><i class="bi bi-telephone"></i> Nomor Telepon:</span>
                                        085108058777</p>
                                    <p><span class="label"><i class="bi bi-envelope"></i> Email:</span>
                                        j.kafabihi@email.com</p>
                                    <p><span class="label"><i class="bi bi-linkedin"></i> LinkedIn:</span>
                                        <a href="https://linkedin.com/in/ridwan-kafabihi-2406aa24a" target="_blank">
                                            linkedin.com/in/ridwan-kafabihi-2406aa24a
                                        </a>
                                    </p>
                                    <p><span class="label"><i class="bi bi-github"></i> GitHub:</span>
                                        <a href="https://github.com/RidwanJk" target="_blank">github.com/RidwanJk</a>
                                    </p>
                                </div>

                                <div class="col-md-6 text-center">
                                    <img src="{{ asset('images/assets/Me34.jpg') }}" alt="Profile Picture"
                                        class="profile-picture" style="height: 500px; object-fit">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card mt-5 pt-5 pb-5">

                        <div class="container">
                            <div class="col mx-5">
                                <h5 class="card-title">About me</h5>
                                <p class="card-text justify-content-end">I am a fresh graduate from UIN Malang
                                    Informatics Engineering Program who has a great interest in technology development,
                                    especially in the field of Game Dev and Web Dev. In addition, I also study other
                                    aspects such as Networking and Data Science. I am a hardworking person, highly
                                    curious, and always eager to learn new things. I hope to develop my career in a
                                    position that suits my skills and interests.
                                </p>
                            </div>
                            <div class="section mt-5">
                                <div class="education-section">
                                    <h2>Recent Study </h2>

                                    <div class="edu-item">
                                        <div class="title">UIN Maulana Malik Ibrahim Malang – Teknik Informatika (S.Kom)
                                        </div>
                                        <div class="years">2021 – 2025 | GPA: 3.76</div>
                                    </div>

                                    <div class="edu-item">
                                        <div class="title">SMA Negeri 7 Malang – IPA</div>
                                        <div class="years">2018 – 2021</div>
                                    </div>

                                    <div class="edu-item">
                                        <div class="title">SMP Negeri 11 Malang</div>
                                        <div class="years">2015 – 2018</div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="container ms-5 me-5">
                                    <h3>Language</h3>
                                    <p>Indonesian</p>
                                    <div class="skill-bar">
                                        <div class="skill-level" style="width: 100%;">Native</div>
                                    </div>

                                    <p>English</p>
                                    <div class="skill-bar">
                                        <div class="skill-level" style="width: 90%;">Advanced</div>
                                    </div>

                                    <p>Other</p>
                                    <div class="skill-bar">
                                        <div class="skill-level" style="width: 30%;">Basic</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>
@endsection