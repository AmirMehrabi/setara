@extends('layouts.app')

@section('title', 'ثبت کسب و کار')

@section('content')
<div class="min-h-screen bg-gray-50 pt-20 lg:pt-32 pb-12">
    <div class="max-w-2xl mx-auto px-4">
        <!-- Progress Bar -->
        <div class="mb-8">
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm font-medium text-gray-600">مرحله <span id="current-step">1</span> از 5</span>
                <span class="text-sm font-medium text-gray-600"><span id="step-percentage">20</span>%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div id="progress-bar" class="bg-black h-2 rounded-full transition-all duration-300" style="width: 20%"></div>
            </div>
        </div>

        <!-- Step 1: Location -->
        <div id="step-1" class="wizard-step">
            <div class="bg-white rounded-lg shadow-sm p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">کجا کار می‌کنید؟</h1>
                <p class="text-gray-600 mb-8">به مشتریان بگویید کجا با شما ملاقات کنند.</p>

                <div class="space-y-6">
                    <div>
                        <label for="street-address" class="block text-sm font-medium text-gray-700 mb-2">آدرس خیابان</label>
                        <input type="text" id="street-address" name="street_address" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                    </div>

                    <div>
                        <label for="suite-apt" class="block text-sm font-medium text-gray-700 mb-2">
                            واحد، آپارتمان و غیره <span class="text-gray-400">(اختیاری)</span>
                        </label>
                        <input type="text" id="suite-apt" name="suite_apt" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700 mb-2">شهر</label>
                            <input type="text" id="city" name="city" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                        </div>
                        <div>
                            <label for="state" class="block text-sm font-medium text-gray-700 mb-2">استان</label>
                            <input type="text" id="state" name="state" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                        </div>
                        <div>
                            <label for="zip" class="block text-sm font-medium text-gray-700 mb-2">کد پستی</label>
                            <input type="text" id="zip" name="zip" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mt-8">
                    <button onclick="nextStep()" class="px-6 py-3 bg-black text-white rounded-lg hover:bg-gray-800 font-medium">
                        بعدی
                    </button>
                </div>
            </div>
        </div>

        <!-- Step 2: Specialty -->
        <div id="step-2" class="wizard-step hidden">
            <div class="bg-white rounded-lg shadow-sm p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8">تخصص خود را به ما بگویید</h1>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <button onclick="selectSpecialty('womens-cuts', this)" 
                        class="specialty-box p-6 border-2 border-gray-200 rounded-lg hover:border-black transition-colors text-center">
                        <div class="text-2xl mb-2">💇‍♀️</div>
                        <div class="font-medium text-gray-900">آرایش موی بانوان</div>
                    </button>
                    <button onclick="selectSpecialty('mens-cuts', this)" 
                        class="specialty-box p-6 border-2 border-gray-200 rounded-lg hover:border-black transition-colors text-center">
                        <div class="text-2xl mb-2">💇‍♂️</div>
                        <div class="font-medium text-gray-900">آرایش موی آقایان</div>
                    </button>
                    <button onclick="selectSpecialty('hair-color', this)" 
                        class="specialty-box p-6 border-2 border-gray-200 rounded-lg hover:border-black transition-colors text-center">
                        <div class="text-2xl mb-2">🎨</div>
                        <div class="font-medium text-gray-900">رنگ مو</div>
                    </button>
                    <button onclick="selectSpecialty('highlights', this)" 
                        class="specialty-box p-6 border-2 border-gray-200 rounded-lg hover:border-black transition-colors text-center">
                        <div class="text-2xl mb-2">✨</div>
                        <div class="font-medium text-gray-900">هایلایت</div>
                    </button>
                    <button onclick="selectSpecialty('makeup', this)" 
                        class="specialty-box p-6 border-2 border-gray-200 rounded-lg hover:border-black transition-colors text-center">
                        <div class="text-2xl mb-2">💄</div>
                        <div class="font-medium text-gray-900">آرایش</div>
                    </button>
                    <button onclick="selectSpecialty('kids', this)" 
                        class="specialty-box p-6 border-2 border-gray-200 rounded-lg hover:border-black transition-colors text-center">
                        <div class="text-2xl mb-2">👶</div>
                        <div class="font-medium text-gray-900">کودکان</div>
                    </button>
                    <button onclick="selectSpecialty('eyebrow', this)" 
                        class="specialty-box p-6 border-2 border-gray-200 rounded-lg hover:border-black transition-colors text-center">
                        <div class="text-2xl mb-2">👁️</div>
                        <div class="font-medium text-gray-900">ابرو</div>
                    </button>
                    <button onclick="selectSpecialty('nail', this)" 
                        class="specialty-box p-6 border-2 border-gray-200 rounded-lg hover:border-black transition-colors text-center">
                        <div class="text-2xl mb-2">💅</div>
                        <div class="font-medium text-gray-900">ناخن</div>
                    </button>
                    <button onclick="selectSpecialty('other', this)" 
                        class="specialty-box p-6 border-2 border-gray-200 rounded-lg hover:border-black transition-colors text-center">
                        <div class="text-2xl mb-2">➕</div>
                        <div class="font-medium text-gray-900">سایر</div>
                    </button>
                </div>

                <div class="flex justify-between mt-8">
                    <button onclick="prevStep()" class="px-6 py-3 bg-gray-100 text-gray-900 rounded-lg hover:bg-gray-200 font-medium">
                        قبلی
                    </button>
                    <button id="specialty-next-btn" onclick="goToServices()" class="px-6 py-3 bg-black text-white rounded-lg hover:bg-gray-800 font-medium hidden">
                        بعدی
                    </button>
                </div>
            </div>
        </div>

        <!-- Step 3: Services -->
        <div id="step-3" class="wizard-step hidden">
            <div class="bg-white rounded-lg shadow-sm p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">خدمات برتر خود را اضافه کنید</h1>
                <p class="text-gray-600 mb-2">هرچه خدمات بیشتری اضافه کنید، احتمال جذب مشتری جدید بیشتر می‌شود</p>
                <p class="text-sm text-gray-500 mb-8">نکته: همیشه می‌توانید خدمات را ویرایش کرده و موارد بیشتری اضافه کنید.</p>

                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">خدمات پیشنهادی:</h3>
                    <div id="suggested-services" class="space-y-3">
                        <!-- Services will be populated by JavaScript -->
                    </div>
                </div>

                <div class="flex justify-between mt-8">
                    <button onclick="prevStep()" class="px-6 py-3 bg-gray-100 text-gray-900 rounded-lg hover:bg-gray-200 font-medium">
                        قبلی
                    </button>
                    <button onclick="nextStep()" class="px-6 py-3 bg-black text-white rounded-lg hover:bg-gray-800 font-medium">
                        بعدی
                    </button>
                </div>
            </div>
        </div>

        <!-- Step 4: Availability -->
        <div id="step-4" class="wizard-step hidden">
            <div class="bg-white rounded-lg shadow-sm p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">زمان‌های کاری شما چیست؟</h1>
                <p class="text-gray-600 mb-8">متخصصانی که حداقل 4 روز در هفته و 4+ ساعت در روز کار می‌کنند، احتمال رزرو بیشتری دارند. مشتریان عاشق رزرو آخر هفته هستند!</p>

                <div id="availability-list" class="space-y-4">
                    <!-- Days will be populated by JavaScript -->
                </div>

                <div class="flex justify-between mt-8">
                    <button onclick="prevStep()" class="px-6 py-3 bg-gray-100 text-gray-900 rounded-lg hover:bg-gray-200 font-medium">
                        قبلی
                    </button>
                    <button onclick="nextStep()" class="px-6 py-3 bg-black text-white rounded-lg hover:bg-gray-800 font-medium">
                        بعدی
                    </button>
                </div>
            </div>
        </div>

        <!-- Step 5: Photos -->
        <div id="step-5" class="wizard-step hidden">
            <div class="bg-white rounded-lg shadow-sm p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">عکس‌های کار خود را اضافه کنید</h1>
                <p class="text-gray-600 mb-8">پروفایل‌هایی با حداقل 4 عکس، 3 برابر بیشتر احتمال رزرو دارند.</p>

                <div class="border-2 border-dashed border-gray-300 rounded-lg p-12 text-center">
                    <input type="file" id="photo-upload" multiple accept="image/*" class="hidden" onchange="handlePhotoUpload(event)">
                    <label for="photo-upload" class="cursor-pointer">
                        <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="text-lg font-medium text-gray-900 mb-2">حداقل 4 عکس انتخاب کنید</p>
                        <p class="text-sm text-gray-500">یا فایل‌ها را اینجا بکشید</p>
                    </label>
                </div>

                <div id="photo-preview" class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                    <!-- Photo previews will be added here -->
                </div>

                <div class="flex justify-between mt-8">
                    <button onclick="prevStep()" class="px-6 py-3 bg-gray-100 text-gray-900 rounded-lg hover:bg-gray-200 font-medium">
                        قبلی
                    </button>
                    <button onclick="submitWizard()" class="px-6 py-3 bg-black text-white rounded-lg hover:bg-gray-800 font-medium">
                        تکمیل ثبت‌نام
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Modal -->
<div id="service-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-lg max-w-md w-full p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold text-gray-900">افزودن خدمت</h3>
            <button onclick="closeServiceModal()" class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <form id="service-form" onsubmit="addService(event)" class="space-y-4">
            <div>
                <label for="service-name" class="block text-sm font-medium text-gray-700 mb-2">نام</label>
                <input type="text" id="service-name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
            </div>
            <div>
                <label for="service-price" class="block text-sm font-medium text-gray-700 mb-2">قیمت</label>
                <div class="flex items-center gap-3">
                    <input type="number" id="service-price" required
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" id="service-price-up" class="w-4 h-4 text-black border-gray-300 rounded focus:ring-black">
                        <span class="text-sm text-gray-700">و بالاتر</span>
                    </label>
                </div>
            </div>
            <div>
                <label for="service-duration" class="block text-sm font-medium text-gray-700 mb-2">مدت زمان</label>
                <select id="service-duration" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                    <option value="">انتخاب کنید</option>
                    <option value="15">15 دقیقه</option>
                    <option value="30">30 دقیقه</option>
                    <option value="45">45 دقیقه</option>
                    <option value="60">1 ساعت</option>
                    <option value="90">1.5 ساعت</option>
                    <option value="120">2 ساعت</option>
                    <option value="180">3 ساعت</option>
                </select>
            </div>
            <div>
                <label for="service-description" class="block text-sm font-medium text-gray-700 mb-2">توضیحات</label>
                <textarea id="service-description" rows="3"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"></textarea>
            </div>
            <div class="flex justify-end gap-3 pt-4">
                <button type="button" onclick="closeServiceModal()" class="px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 font-medium">
                    انصراف
                </button>
                <button type="submit" class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 font-medium">
                    افزودن
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
let currentStep = 1;
const totalSteps = 5;
let selectedSpecialty = null;
let addedServices = [];
let uploadedPhotos = [];

const weekdays = [
    { name: 'شنبه', value: 'saturday' },
    { name: 'یکشنبه', value: 'sunday' },
    { name: 'دوشنبه', value: 'monday' },
    { name: 'سه‌شنبه', value: 'tuesday' },
    { name: 'چهارشنبه', value: 'wednesday' },
    { name: 'پنج‌شنبه', value: 'thursday' },
    { name: 'جمعه', value: 'friday' }
];

const suggestedServices = {
    'womens-cuts': ['کوتاهی موی بانوان', 'اصلاح موی بانوان', 'فر موی بانوان', 'سشوار موی بانوان'],
    'mens-cuts': ['کوتاهی موی آقایان', 'اصلاح موی آقایان', 'اصلاح ریش', 'اصلاح سبیل'],
    'hair-color': ['رنگ موی کامل', 'ریشه‌زنی', 'رنگ موی فانتزی', 'رنگ موی طبیعی'],
    'highlights': ['هایلایت کامل', 'هایلایت نیمه', 'بلیچ', 'بابیلاش'],
    'makeup': ['آرایش عروس', 'آرایش روز', 'آرایش شب', 'آرایش گریم'],
    'kids': ['کوتاهی موی کودک', 'اصلاح موی کودک', 'رنگ موی کودک'],
    'eyebrow': ['اصلاح ابرو', 'تاتو ابرو', 'رنگ ابرو', 'لامینیت ابرو'],
    'nail': ['مانیکور', 'پدیکور', 'ناخن مصنوعی', 'نقاشی ناخن'],
    'other': ['خدمت سفارشی']
};

function updateProgress() {
    const percentage = (currentStep / totalSteps) * 100;
    document.getElementById('current-step').textContent = currentStep;
    document.getElementById('step-percentage').textContent = Math.round(percentage);
    document.getElementById('progress-bar').style.width = percentage + '%';
}

function showStep(step) {
    document.querySelectorAll('.wizard-step').forEach(s => s.classList.add('hidden'));
    document.getElementById(`step-${step}`).classList.remove('hidden');
    updateProgress();
}

function nextStep() {
    if (currentStep < totalSteps) {
        currentStep++;
        showStep(currentStep);
    }
}

function prevStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
    }
}

function selectSpecialty(specialty, element) {
    selectedSpecialty = specialty;
    document.querySelectorAll('.specialty-box').forEach(box => {
        box.classList.remove('border-black', 'bg-gray-50');
        box.classList.add('border-gray-200');
    });
    element.classList.add('border-black', 'bg-gray-50');
    element.classList.remove('border-gray-200');
    document.getElementById('specialty-next-btn').classList.remove('hidden');
}

function goToServices() {
    if (selectedSpecialty) {
        populateSuggestedServices();
        nextStep();
    }
}

function populateSuggestedServices() {
    const services = suggestedServices[selectedSpecialty] || suggestedServices['other'];
    const container = document.getElementById('suggested-services');
    container.innerHTML = '';
    
        services.forEach(serviceName => {
        const serviceId = serviceName.replace(/\s+/g, '-').toLowerCase();
        const isAdded = addedServices.some(s => s.id === serviceId);
        
        const serviceDiv = document.createElement('div');
        serviceDiv.className = 'flex items-center justify-between p-4 border border-gray-200 rounded-lg';
        serviceDiv.setAttribute('data-service-id', serviceId);
        serviceDiv.innerHTML = `
            <span class="font-medium text-gray-900">${serviceName}</span>
            <button onclick="openServiceModal('${serviceName}', '${serviceId}')" 
                class="service-action-btn ${isAdded ? 'hidden' : ''}" data-service-id="${serviceId}">
                <svg class="w-6 h-6 text-gray-600 hover:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </button>
            <button class="service-check-btn ${isAdded ? '' : 'hidden'}">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </button>
        `;
        container.appendChild(serviceDiv);
    });
}

let currentServiceId = null;

function openServiceModal(serviceName, serviceId) {
    currentServiceId = serviceId;
    document.getElementById('service-name').value = serviceName;
    document.getElementById('service-price').value = '';
    document.getElementById('service-price-up').checked = false;
    document.getElementById('service-duration').value = '';
    document.getElementById('service-description').value = '';
    document.getElementById('service-modal').classList.remove('hidden');
}

function closeServiceModal() {
    document.getElementById('service-modal').classList.add('hidden');
    currentServiceId = null;
}

function addService(event) {
    event.preventDefault();
    
    const service = {
        id: currentServiceId,
        name: document.getElementById('service-name').value,
        price: document.getElementById('service-price').value,
        priceUp: document.getElementById('service-price-up').checked,
        duration: document.getElementById('service-duration').value,
        description: document.getElementById('service-description').value
    };
    
    addedServices.push(service);
    
    // Update UI - find the service div by the service ID
    const serviceDiv = document.querySelector(`[data-service-id="${currentServiceId}"]`);
    if (serviceDiv) {
        const addBtn = serviceDiv.querySelector('.service-action-btn');
        const checkBtn = serviceDiv.querySelector('.service-check-btn');
        if (addBtn) addBtn.classList.add('hidden');
        if (checkBtn) checkBtn.classList.remove('hidden');
    }
    
    closeServiceModal();
}

function populateAvailability() {
    const container = document.getElementById('availability-list');
    container.innerHTML = '';
    
    weekdays.forEach(day => {
        const dayDiv = document.createElement('div');
        dayDiv.className = 'availability-day border border-gray-200 rounded-lg p-4';
        dayDiv.innerHTML = `
            <div class="flex items-center justify-between">
                <span class="font-medium text-gray-900">${day.name}</span>
                <button onclick="toggleDayAvailability('${day.value}')" 
                    class="add-time-btn text-gray-600 hover:text-black">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>
            <div id="time-fields-${day.value}" class="hidden mt-4 space-y-3">
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">زمان شروع</label>
                        <input type="time" value="09:00" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">زمان پایان</label>
                        <input type="time" value="18:00" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                    </div>
                </div>
                <div>
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" onchange="toggleBreakFields('${day.value}', this.checked)" 
                            class="w-4 h-4 text-black border-gray-300 rounded focus:ring-black">
                        <span class="text-sm text-gray-700">استراحت</span>
                    </label>
                </div>
                <div id="break-fields-${day.value}" class="hidden grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">شروع استراحت</label>
                        <input type="time" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">پایان استراحت</label>
                        <input type="time" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                    </div>
                </div>
            </div>
        `;
        container.appendChild(dayDiv);
    });
}

function toggleDayAvailability(dayValue) {
    const timeFields = document.getElementById(`time-fields-${dayValue}`);
    timeFields.classList.toggle('hidden');
}

function toggleBreakFields(dayValue, show) {
    const breakFields = document.getElementById(`break-fields-${dayValue}`);
    if (show) {
        breakFields.classList.remove('hidden');
    } else {
        breakFields.classList.add('hidden');
    }
}

function handlePhotoUpload(event) {
    const files = Array.from(event.target.files);
    files.forEach(file => {
        if (file.type.startsWith('image/')) {
            uploadedPhotos.push(file);
            const reader = new FileReader();
            reader.onload = function(e) {
                const previewDiv = document.createElement('div');
                previewDiv.className = 'relative';
                previewDiv.innerHTML = `
                    <img src="${e.target.result}" alt="Preview" class="w-full h-32 object-cover rounded-lg">
                    <button onclick="removePhoto(this)" class="absolute top-2 left-2 bg-black bg-opacity-50 text-white rounded-full p-1 hover:bg-opacity-70">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                `;
                document.getElementById('photo-preview').appendChild(previewDiv);
            };
            reader.readAsDataURL(file);
        }
    });
}

function removePhoto(button) {
    const photoDiv = button.closest('.relative');
    const index = Array.from(photoDiv.parentElement.children).indexOf(photoDiv);
    uploadedPhotos.splice(index, 1);
    photoDiv.remove();
}

function submitWizard() {
    // Here you would submit the form data
    console.log('Submitting wizard data...');
    alert('ثبت‌نام با موفقیت انجام شد!');
}

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    populateAvailability();
    updateProgress();
});
</script>
@endsection

