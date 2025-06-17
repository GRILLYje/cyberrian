<x-app-layout>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 ">

        <!-- Suggested Courses Section -->
        <section class="flex flex-row mx-auto p-8 mt-8 relative">

            <div class="flex flex-col justify-center items-center absolute left-0 z-50">
                <img src="{{ asset('images/name.png') }}" alt="Husky dog" class="h-auto w-1/2">
                <img src="{{ asset('images/suggest-course/Agent.png') }}" alt="Husky dog" class="h-auto ">
            </div>
            <div class="flex flex-col w-full justify-center items-center ml-96">


                <h1 class="text-5xl text-white font-semibold text-center">
                    น้องไช <span class="text-[#0CA5FF]">อยากแนะนำ !</span> ให้พี่ ๆ ได้เรียนนะ ! โฮ่งๆๆ
                </h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 my-8 w-full">
                    <!-- Card 1: พื้นฐานของ Cyber Security -->
                    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300 flex justify-end items-end h-64 w-full bg-cover"
                        style="background-image: url('{{ asset('images/suggest-course/basic.png') }}');">
                        <div class="p-4 flex justify-center bg-black bg-opacity-50 w-full h-auto">
                            <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">พื้นฐานของ Cyber Security</h3>
                        </div>
                    </div>
                    <!-- Card 2: ทำความรู้จักกับ Cyber Security คืออะไร ? -->
                    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300 flex items-end h-64 w-full bg-cover"
                        style="background-image: url('{{ asset('images/suggest-course/know.png') }}');">
                        <div class="p-4 flex justify-center bg-black bg-opacity-50 w-full">
                            <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">ทำความรู้จักกับ Cyber Security คืออะไร ?
                            </h3>
                        </div>
                    </div>
                    <!-- Card 3: Cyber Security ในชีวิตประจำวันของคุณ ! -->
                    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300 flex items-end h-64 w-full bg-cover"
                        style="background-image: url('{{ asset('images/suggest-course/daily.png') }}');">

                        <div class="p-4 flex justify-center bg-black bg-opacity-50 w-full">
                            <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">Cyber Security ในชีวิตประจำวันของคุณ !
                            </h3>
                        </div>
                    </div>
                    <!-- Card 4: ทำไมต้องเรียน และเข้าใจ Cyber Security ? -->
                    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300 flex items-end h-64 w-full bg-cover"
                        style="background-image: url('{{ asset('images/suggest-course/learn.png') }}');">

                        <div class="p-4 flex justify-end bg-black bg-opacity-50 w-full">
                            <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">ทำไมต้องเรียน และเข้าใจ Cyber Security ?
                            </h3>
                        </div>
                    </div>
                    <!-- Card 5: การทดสอบ Social Engineering กับทีมของคุณ ! -->
                    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300 flex items-end h-64 w-full bg-cover"
                        style="background-image: url('{{ asset('images/suggest-course/test.png') }}');">

                        <div class="p-4 flex justify-end bg-black bg-opacity-50 w-full">
                            <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">การทดสอบ Social Engineering กับทีมของคุณ !
                            </h3>
                        </div>
                    </div>
                    <!-- Card 6: วิธีการตรวจสอบ สิ่งปลอม หรือ ลิงค์ อันตราย ! -->
                    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform transition duration-300 flex items-end h-64 w-full bg-cover"
                        style="background-image: url('{{ asset('images/suggest-course/malware.png') }}');">

                        <div class="p-4 flex justify-end bg-black bg-opacity-50 w-full">
                            <h3 class="text-xl font-bold text-[#0CA5FF] mb-2">วิธีการตรวจสอบ สิ่งปลอม หรือ ลิงค์ อันตราย
                                !
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>