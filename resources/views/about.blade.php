@extends('layouts.user')

@section('title', 'Home')

@section('contents')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                About Us
            </h1>
        </div>
    </header>
    <hr />
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="border-4 border-dashed border-gray-200 rounded-lg bg-white p-6 shadow-md">
                    <p class="text-gray-700 mb-4">
                        Merhaba, ben Abdullah Karakoç. Karabük Üniversitesi Bilgisayar Mühendisliği 2. sınıf öğrencisiyim.
                        Backend ve gömülü yazılım alanında kendimi geliştiriyorum. Aynı zamanda bisiklet sürmek, yüzmek ve doğa yürüyüşü yapmak
                        gibi aktivitelerden keyif alırım.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Teknolojiye olan tutkum ve merakım beni sürekli olarak yeni şeyler öğrenmeye yönlendiriyor. Ayrıca, açık kaynaklı yazılım
                        projelerine katkıda bulunmayı seviyorum ve bu alanda da deneyim kazanıyorum.
                    </p>
                    <p class="text-gray-700">
                        Boş zamanlarımda kitap okumak, müzik dinlemek ve sevdiklerimle vakit geçirmek beni mutlu eder.
                    </p>
                </div>
            </div>
        </div>
    </main>

@endsection
