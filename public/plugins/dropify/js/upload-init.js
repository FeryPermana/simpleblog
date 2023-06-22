/*
 Template Name: Urora - Bootstrap 4 Admin Dashboard
 Author: Mannatthemes
 Website: www.mannatthemes.com
 File: upload. Js
 */


!function($) {
    "use strict";


    // Basic
    $('.dropify').dropify();

    // Translated
    $('.dropify-fr').dropify({
        messages: {
            default: 'Drag atau drop untuk memilih file',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        }
    });

    // custom for school dashboard
    $('.dropify-custom-sch').dropify({
        messages: {
            default: 'Upload gambar dengan tipe .png .jpg maks 5mb',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        },

        // custom template
        tpl: {
            wrap:       '<div class="dropify-wrapper"></div>',
            message:    `<div class="dropify-message">
                        <p class="text-dark fs-4">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_601_120729)">
                            <path d="M13.8332 13.4583L10.4998 10.125L7.1665 13.4583" stroke="#2820FD" stroke-width="1.66" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.5 10.125V17.625" stroke="#2820FD" stroke-width="1.66" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.4929 15.4509C18.3056 15.0078 18.9477 14.3066 19.3177 13.4581C19.6878 12.6095 19.7647 11.6619 19.5364 10.7648C19.308 9.86767 18.7874 9.07214 18.0567 8.50375C17.3261 7.93537 16.4269 7.62649 15.5012 7.62588H14.4512C14.199 6.65025 13.7288 5.74449 13.0761 4.97671C12.4235 4.20892 11.6052 3.59909 10.6829 3.19305C9.76065 2.78702 8.75831 2.59535 7.75128 2.63245C6.74426 2.66955 5.75874 2.93447 4.86883 3.40727C3.97893 3.88007 3.20778 4.54847 2.61337 5.3622C2.01896 6.17593 1.61676 7.11383 1.437 8.10538C1.25725 9.09693 1.30461 10.1163 1.57553 11.0869C1.84646 12.0575 2.33389 12.9541 3.00119 13.7092" stroke="#2820FD" stroke-width="1.66" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.8332 13.4583L10.4998 10.125L7.1665 13.4583" stroke="#2820FD" stroke-width="1.66" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_601_120729">
                            <rect width="20" height="20" fill="white" transform="translate(0.5 0.125)"/>
                            </clipPath>
                            </defs>
                            </svg>
                            <span class="ms-2">{{ default }}</span>
                        </p></div>`,
            preview:    '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
            filename:   '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
            clearButton:'<button type="button" class="dropify-clear">{{ remove }}</button>',
            error:      '<p class="dropify-error">{{ error }}</p>'
        }
    });

    $('.dropify-custom-sch-2').dropify({
        messages: {
            default: 'SVG, PNG,atau JPG  (Rasio 1:1). Ukuran maksimal 5 Mb',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        },

        // custom template
        tpl: {
            wrap:       '<div class="dropify-wrapper"></div>',
            message:    `<div class="dropify-message">
                        <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3.625" width="36" height="36" rx="18" fill="#EAECF0"/>
                            <path d="M20.9998 19.4781C20.7674 19.4897 20.5351 19.4539 20.317 19.3728C20.0989 19.2918 19.8996 19.1672 19.7312 19.0066C19.5755 18.855 19.453 18.6727 19.3714 18.4714C19.2898 18.27 19.2508 18.0538 19.2569 17.8366C19.2513 17.6195 19.2905 17.4035 19.3721 17.2022C19.4537 17.0009 19.576 16.8186 19.7312 16.6666C19.9 16.5067 20.0994 16.3827 20.3174 16.3019C20.5354 16.2211 20.7675 16.1853 20.9998 16.1966C21.464 16.1731 21.919 16.3314 22.2683 16.6381C22.4247 16.7834 22.548 16.9607 22.6299 17.1579C22.7117 17.3551 22.7502 17.5676 22.7426 17.7809C22.7507 18.0058 22.7128 18.23 22.6313 18.4398C22.5497 18.6496 22.4262 18.8405 22.2683 19.0009C22.1007 19.1629 21.9017 19.2888 21.6835 19.3709C21.4653 19.453 21.2326 19.4894 20.9998 19.4781ZM19.3783 26.8009L19.5312 26.5066C19.544 26.4819 19.5509 26.4545 19.5512 26.4266V20.2109C19.5519 20.1656 19.5705 20.1223 19.6028 20.0905C19.6352 20.0587 19.6787 20.0409 19.7241 20.0409H22.4626C22.492 20.041 22.521 20.0486 22.5466 20.0629C22.5723 20.0773 22.5939 20.098 22.6093 20.123C22.6248 20.148 22.6336 20.1766 22.6349 20.206C22.6362 20.2354 22.63 20.2646 22.6169 20.2909L22.4741 20.5881C22.4615 20.6123 22.4552 20.6393 22.4555 20.6666V26.8838C22.4555 26.9296 22.4373 26.9736 22.4049 27.006C22.3724 27.0384 22.3285 27.0566 22.2826 27.0566H19.5312C19.5011 27.0568 19.4715 27.0492 19.4453 27.0344C19.419 27.0197 19.3971 26.9983 19.3817 26.9725C19.3662 26.9466 19.3578 26.9172 19.3572 26.8871C19.3566 26.857 19.3639 26.8273 19.3783 26.8009Z" fill="#344054"/>
                            <rect x="13" y="13.625" width="16" height="16" rx="8" stroke="#344054" stroke-width="0.857143"/>
                            <rect x="3" y="3.625" width="36" height="36" rx="18" stroke="#F2F4F7" stroke-width="6"/>
                        </svg>
                        <p class="text-dark fs-4 fw-medium"><span class="text-primary fw-semibold">Klik untuk mengunggah</span> atau drag & drop</p>
                        <p class="text-dark fs-6 fw-medium">{{ default }}</p>
                        </div>`,
            preview:    '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
            filename:   '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
            clearButton:'<button type="button" class="dropify-clear">{{ remove }}</button>',
            error:      '<p class="dropify-error">{{ error }}</p>'
        }
    });
    $('.dropify-custom-apply').dropify({
        messages: {
            default: 'PDF (maksimal 5 MB)',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        },

        // custom template
        tpl: {
            wrap:       '<div class="dropify-wrapper"></div>',
            message:    `<div class="dropify-message flex flex-row gap-x-4">
                        <span class="self-center"><svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3.625" width="36" height="36" rx="18" fill="#EAECF0"/>
                            <path d="M20.9998 19.4781C20.7674 19.4897 20.5351 19.4539 20.317 19.3728C20.0989 19.2918 19.8996 19.1672 19.7312 19.0066C19.5755 18.855 19.453 18.6727 19.3714 18.4714C19.2898 18.27 19.2508 18.0538 19.2569 17.8366C19.2513 17.6195 19.2905 17.4035 19.3721 17.2022C19.4537 17.0009 19.576 16.8186 19.7312 16.6666C19.9 16.5067 20.0994 16.3827 20.3174 16.3019C20.5354 16.2211 20.7675 16.1853 20.9998 16.1966C21.464 16.1731 21.919 16.3314 22.2683 16.6381C22.4247 16.7834 22.548 16.9607 22.6299 17.1579C22.7117 17.3551 22.7502 17.5676 22.7426 17.7809C22.7507 18.0058 22.7128 18.23 22.6313 18.4398C22.5497 18.6496 22.4262 18.8405 22.2683 19.0009C22.1007 19.1629 21.9017 19.2888 21.6835 19.3709C21.4653 19.453 21.2326 19.4894 20.9998 19.4781ZM19.3783 26.8009L19.5312 26.5066C19.544 26.4819 19.5509 26.4545 19.5512 26.4266V20.2109C19.5519 20.1656 19.5705 20.1223 19.6028 20.0905C19.6352 20.0587 19.6787 20.0409 19.7241 20.0409H22.4626C22.492 20.041 22.521 20.0486 22.5466 20.0629C22.5723 20.0773 22.5939 20.098 22.6093 20.123C22.6248 20.148 22.6336 20.1766 22.6349 20.206C22.6362 20.2354 22.63 20.2646 22.6169 20.2909L22.4741 20.5881C22.4615 20.6123 22.4552 20.6393 22.4555 20.6666V26.8838C22.4555 26.9296 22.4373 26.9736 22.4049 27.006C22.3724 27.0384 22.3285 27.0566 22.2826 27.0566H19.5312C19.5011 27.0568 19.4715 27.0492 19.4453 27.0344C19.419 27.0197 19.3971 26.9983 19.3817 26.9725C19.3662 26.9466 19.3578 26.9172 19.3572 26.8871C19.3566 26.857 19.3639 26.8273 19.3783 26.8009Z" fill="#344054"/>
                            <rect x="13" y="13.625" width="16" height="16" rx="8" stroke="#344054" stroke-width="0.857143"/>
                            <rect x="3" y="3.625" width="36" height="36" rx="18" stroke="#F2F4F7" stroke-width="6"/>
                        </svg></span>
                        <div class="text-left">
                        <p class="text-dark fs-4 fw-medium"><span class="text-primary fw-semibold">Klik untuk upload</span> atau seret dan lepaskan</p>
                        <p class="text-dark fs-6 fw-medium">{{ default }}</p>
                        </div>
                        </div>`,
            preview:    '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
            filename:   '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
            clearButton:'<button type="button" class="dropify-clear">{{ remove }}</button>',
            error:      '<p class="dropify-error">{{ error }}</p>'
        }
    });
    $('.dropify-custom-sampul').dropify({
        messages: {
            default: 'Gambar JPG landscape maks. 2 MB. Usahakan gambar jelas dan tidak blur.',
            replace: 'Ganti',
            remove:  '<i class="gi-solid gi-trash text-white text-4xl"></i>',
            error:   'error'
        },

        // custom template
        tpl: {
            wrap:       '<div class="dropify-wrapper"></div>',
            message:    `<div class="dropify-message">
                        <div class="flex justify-center">
                        <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3.625" width="36" height="36" rx="18" fill="#EAECF0"/>
                            <path d="M20.9998 19.4781C20.7674 19.4897 20.5351 19.4539 20.317 19.3728C20.0989 19.2918 19.8996 19.1672 19.7312 19.0066C19.5755 18.855 19.453 18.6727 19.3714 18.4714C19.2898 18.27 19.2508 18.0538 19.2569 17.8366C19.2513 17.6195 19.2905 17.4035 19.3721 17.2022C19.4537 17.0009 19.576 16.8186 19.7312 16.6666C19.9 16.5067 20.0994 16.3827 20.3174 16.3019C20.5354 16.2211 20.7675 16.1853 20.9998 16.1966C21.464 16.1731 21.919 16.3314 22.2683 16.6381C22.4247 16.7834 22.548 16.9607 22.6299 17.1579C22.7117 17.3551 22.7502 17.5676 22.7426 17.7809C22.7507 18.0058 22.7128 18.23 22.6313 18.4398C22.5497 18.6496 22.4262 18.8405 22.2683 19.0009C22.1007 19.1629 21.9017 19.2888 21.6835 19.3709C21.4653 19.453 21.2326 19.4894 20.9998 19.4781ZM19.3783 26.8009L19.5312 26.5066C19.544 26.4819 19.5509 26.4545 19.5512 26.4266V20.2109C19.5519 20.1656 19.5705 20.1223 19.6028 20.0905C19.6352 20.0587 19.6787 20.0409 19.7241 20.0409H22.4626C22.492 20.041 22.521 20.0486 22.5466 20.0629C22.5723 20.0773 22.5939 20.098 22.6093 20.123C22.6248 20.148 22.6336 20.1766 22.6349 20.206C22.6362 20.2354 22.63 20.2646 22.6169 20.2909L22.4741 20.5881C22.4615 20.6123 22.4552 20.6393 22.4555 20.6666V26.8838C22.4555 26.9296 22.4373 26.9736 22.4049 27.006C22.3724 27.0384 22.3285 27.0566 22.2826 27.0566H19.5312C19.5011 27.0568 19.4715 27.0492 19.4453 27.0344C19.419 27.0197 19.3971 26.9983 19.3817 26.9725C19.3662 26.9466 19.3578 26.9172 19.3572 26.8871C19.3566 26.857 19.3639 26.8273 19.3783 26.8009Z" fill="#344054"/>
                            <rect x="13" y="13.625" width="16" height="16" rx="8" stroke="#344054" stroke-width="0.857143"/>
                            <rect x="3" y="3.625" width="36" height="36" rx="18" stroke="#F2F4F7" stroke-width="6"/>
                        </svg>
                        </div>
                        <p class="text-blue-1 text-base font-semibold">Klik untuk mengunggah</p>
                        <p class="text-dark fs-6 fw-medium">{{ default }}</p>
                        </div>`,
            preview:    '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
            filename:   '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
            clearButton:'<button type="button" class="dropify-clear">{{ remove }}</button>',
            error:      '<p class="dropify-error">{{ error }}</p>'
        }
    });

    // Used events
    var drEvent = $('#input-file-events').dropify();

    drEvent.on('dropify.beforeClear', function(event, element){
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
    });

    drEvent.on('dropify.afterClear', function(event, element){
        alert('File deleted');
    });

    drEvent.on('dropify.errors', function(event, element){
        console.log('Has Errors');
    });

    var drDestroy = $('#input-file-to-destroy').dropify();
    drDestroy = drDestroy.data('dropify')
    $('#toggleDropify').on('click', function(e){
        e.preventDefault();
        if (drDestroy.isDropified()) {
            drDestroy.destroy();
        } else {
            drDestroy.init();
        }
    })
}
(window.jQuery);



