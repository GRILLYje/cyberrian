<x-app-layout>
    <div class="min-h-screen bg-[#1F2937] text-white">

        <!-- Suggested Courses Section -->
        <section class="container mx-auto p-8 mt-8 relative">
            <div class="absolute left-0 top-0 transform -translate-x-[40%] z-50">
                <img src="{{ asset('images/suggest-course/Agent.png') }}" alt="Husky dog" class="h-auto ">
            </div>
            <h1 class="text-5xl text-white font-semibold text-center">
                น้องไช <span class="text-[#0CA5FF]">อยากแนะนำ !</span> ให้พี่ ๆ ได้เรียนนะ ! โอ้่ง ๆ ๆ
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1: พื้นฐานของ Cyber Security -->
                <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300">
                    <img src="{{ asset('images/suggest-course/basic.png') }}" alt="Cyber Security Basics" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">พื้นฐานของ Cyber Security</h3>
                    </div>
                </div>
                <!-- Card 2: ทำความรู้จักกับ Cyber Security คืออะไร ? -->
                <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300">
                    <img src="{{ asset('images/suggest-course/know.png') }}" alt="What is Cyber Security" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">ทำความรู้จักกับ Cyber Security คืออะไร ?</h3>
                    </div>
                </div>
                <!-- Card 3: Cyber Security ในชีวิตประจำวันของคุณ ! -->
                <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300">
                    <img src="{{ asset('images/suggest-course/daily.png') }}" alt="Daily Cyber Security" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">Cyber Security ในชีวิตประจำวันของคุณ !</h3>
                    </div>
                </div>
                <!-- Card 4: ทำไมต้องเรียน และเข้าใจ Cyber Security ? -->
                <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300">
                    <img src="{{ asset('images/suggest-course/learn.png') }}" alt="Why learn Cyber Security" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">ทำไมต้องเรียน และเข้าใจ Cyber Security ?</h3>
                    </div>
                </div>
                <!-- Card 5: การทดสอบ Social Engineering กับทีมของคุณ ! -->
                <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300">
                    <img src="{{ asset('images/suggest-course/test.png') }}" alt="Social Engineering Test" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">การทดสอบ Social Engineering กับทีมของคุณ !</h3>
                    </div>
                </div>
                <!-- Card 6: วิธีการตรวจสอบ สิ่งปลอม หรือ ลิงค์ อันตราย ! -->
                <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300">
                    <img src="{{ asset('images/suggest-course/malware.png') }}" alt="Check for fake links" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">วิธีการตรวจสอบ สิ่งปลอม หรือ ลิงค์ อันตราย !</h3>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>