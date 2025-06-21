@extends('layouts.app')

@section('title', 'Skills')


@section('content')
<div class="container mt-5 pt-5">
    <h1 class="text-center mb-4">My Skills</h1>

    <div class="row g-4">
        <!-- Programming Languages -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="skill-image-icon"><i class="bi bi-code-slash"></i></div>
                    <h5 class="card-title text-center">Programming Languages</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/csharp/csharp-original.svg" class="skill-icon" alt="C#">
                            C#
                        </li>
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" class="skill-icon" alt="Python">
                            Python
                        </li>
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="skill-icon" alt="PHP">
                            PHP
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Frameworks -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="skill-image-icon"><i class="bi bi-tools"></i></div>
                    <h5 class="card-title text-center">Frameworks & Libraries</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" class="skill-icon" alt="Laravel">
                            Laravel
                        </li>
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" class="skill-icon" alt="Bootstrap">
                            Bootstrap
                        </li>
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" class="skill-icon" alt="React">
                            React (Basic)
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Game Development -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="skill-image-icon"><i class="bi bi-controller"></i></div>
                    <h5 class="card-title text-center">Game Development</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/unity/unity-original.svg" class="skill-icon" alt="Unity">
                            Unity (C#)
                        </li>
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/godot/godot-original.svg" class="skill-icon" alt="Godot">
                            Godot (Basic)
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Tools -->
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="skill-image-icon"><i class="bi bi-terminal"></i></div>
                    <h5 class="card-title text-center">Tools & Technologies</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" class="skill-icon" alt="Git">
                            Git & GitHub
                        </li>
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="skill-icon" alt="MySQL">
                            MySQL
                        </li>
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg" class="skill-icon" alt="Linux">
                            Linux
                        </li>
                        <li class="list-group-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" class="skill-icon" alt="Figma">
                            Figma
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Soft Skills -->
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="skill-image-icon"><i class="bi bi-people"></i></div>
                    <h5 class="card-title text-center">Soft Skills</h5>
                    <div class="row text-center">
                        <div class="col-md-3">Problem Solving</div>
                        <div class="col-md-3">Teamwork</div>
                        <div class="col-md-3">Adaptability</div>
                        <div class="col-md-3">Time Management</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
