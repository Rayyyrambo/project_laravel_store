<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Dashboard Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <style>
        
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
    </style> 
</head>
<body class="bg-gray-800">
     <div class="container mx-auto flex justify-center items-center h-screen">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-20 p-3">
            <!-- left -->
            <div class="bg-gradient-to-t from-indigo-400 to-slate-300 p-8 rounded-2xl shadow-2xl overflow-hidden card-hover text-center"> 
               <div class="p-10">
                    <div class="text-center mb-6">
                        <div class="inline-flex items-center justify-center w-14 h-14 bg-gray-400 rounded-full mb-4">
                            <i class="fas fa-user text-white text-lg"></i>
                        </div>
                        <h1 class="text-2xl font-bold text-zinc-100 mb-4">Selamat Datang</h1>
                        <p class="text-white font bold">Silakan masuk ke akun Anda</p>       
                    </div>
                    
                    <form class="login-form" action='{{ route("login") }}' method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2 text-sm">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email" class="w-full pl-10 pr-12 py-3 bg-blue-50 border border-blue-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-[0_0px_3px_blue]" name="email" required>
                        </div>        
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2 text-sm">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-key text-gray-400"></i>
                            </div>
                            <input type="password" id="password" class="w-full pl-10 pr-12 py-3 bg-blue-50 border border-blue-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-[0_0px_3px_blue]" name="password" required>
                        </div>
                    </div>
                    <button type="submit" class="login-btn font-bold bg-white text-blue-500 hover:bg-blue-500 hover:text-white py-2 px-4 rounded-md hover:shadow-[0_1px_8px_white]">Masuk</button>
                    
                    <div class="footer-links mt-4">
                        <a href="#">Lupa password?</a>
                        <span>Belum punya akun? <a href="#">Daftar</a></span>
                    </div>
                    </form>
                </div>
            </div>
            <!-- right -->
            <div class="hidden sm:flex ml-10 bg-gradient-to-t from-indigo-400 to-slate-300 p-8 rounded-2xl shadow-2xl overflow-hidden  ">
                <div class="mb-8 flex-flex justify-center w-full ">
                    <div class="text-center">
                        <img class="w-80 h-48 object-cover mx-auto" src="{{Storage::url('images/login_adidas_remove.png')}}" alt="ini logo">
                        <h1 class="text-3xl font-bold mb-4">ADIDAS-STORE</h1>
                        <p>Welcome Back. Log in to your Adidas account</p>
                    </div>
                    <div class="space-y-6 mt-5 ">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Analytics Real-time</h3>
                                <p class="text-white/70 text-sm">Pantau data secara langsung</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                                <i class="fas fa-user-cog"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Keamanan Terjamin</h3>
                                <p class="text-white/70 text-sm">Enkripsi data tingkat tinggi</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                                <i class="fas fa-home"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold">Support 24/7</h3>
                                <p class="text-white/70 text-sm">Tim support selalu siap membantu</p>
                            </div>
                        </div>
                </div>
                </div>  
                
            </div>
        </div>
    </div>
</body>