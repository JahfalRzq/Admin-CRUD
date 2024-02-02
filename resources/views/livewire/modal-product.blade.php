<!-- Add Product Modal -->
<div id="newProductModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full overflow-x-hidden overflow-y-auto">
    <div class="p-4 max-w-xl mx-auto absolute left-0 right-0">
        <div id="productClose" class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
            </svg>
        </div>

        <form action="/store-product" method="POST" id="store_form" enctype="multipart/form-data">
            @csrf
        <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">
            <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Add Product</h2>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                    for="lName">Name</label>
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="lName" name="name" type="text" placeholder="Name"  required>
            </div>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                    for="lTagline">Tagline</label>
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="lTagline" name="tagline" type="text" placeholder="Tagline" required >
            </div>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                    for="lUrl">URL</label>
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="lUrl" name="url" type="text" placeholder="URL" required  >
            </div>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                    for="office">Product Type</label>
                <select name="product_type"
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-36 py-2 p-4 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="">
                    Office Name <img src="https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png"
                        class="inline-flex w-5" />
                    <div class="absolute mx-2 inline-flex">
                        <ul class="bg-gray-100 drop-shadow-lg rounded py-2">

                            @foreach ($product_types as $pt)

                                <li class="hover:bg-gray-200 py-2" >
                                    <a href="#" class="block p-1 mx-7" name="product_type" >
                                        <option value="{{$pt->id}}">{{$pt->product_type}}</option>
                                        {{-- <option value="Software">Software</option>
                                        <option value="Design">Design</option>
                                        <option value="Marketing">Marketing</option> --}}
                                    </a>
                                </li>

                            @endforeach


                        </ul>
                    </div>
                </select>
            </div>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lEvent">Caption</label>
                <textarea name="caption" id="caption_store" maxlength="550" class="bg-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 border-0 appearance-none h-40 p-3 mt-2 w-[370px] md:w-[480px]" placeholder="Caption (max. 550 Words)" required></textarea>
            </div>
            <div class="mb-4" onclick="imgPreviewLogo()">
                <label class="text-gray-800 block mb-2 font-bold text-sm tracking-wide" for="lEventDetail" >Logo</label>
                <label for="file"
                    class="flex flex-col justify-center items-center w-56 h-44 rounded-lg cursor-pointer">
                    <img src="{{ asset('images/bg-gray.jpg') }}" alt="" class="rounded-lg w-56 h-44 object-cover" id="photo">
                    <div class="icon absolute flex flex-col justify-center items-center pt-5 pb-6">
                        <i class="bx-md text-gray-500"></i>
                        <img src="https://img.icons8.com/material-outlined/96/a1a1aa/add-image.png" alt="" class="w-10">
                        <p class="font-medium text-gray-400 text-xs mt-2">File types PNG (max. 2MB)</p>
                    </div>
                    <input name="logo" id="file" type="file" class="hidden" accept=".jpg, .png, .jpeg" required>
                </label>
            </div>
            <div class="mb-4" onclick="imgPreviewBg()">
                <label class="text-gray-800 block mb-2 font-bold text-sm tracking-wide" for="lEventDetail">Background</label>
                <label for="fileBg"
                    class="flex flex-col justify-center items-center w-56 h-44 rounded-lg cursor-pointer">
                    <img src="{{ asset('images/bg-gray.jpg') }}" alt="" class="rounded-lg w-56 h-44 object-cover" id="photoBg">
                    <div class="iconBg absolute flex flex-col justify-center items-center pt-5 pb-6">
                        <i class="bx-md text-gray-500"></i>
                        <img src="https://img.icons8.com/material-outlined/96/a1a1aa/add-image.png" alt="" class="w-10">
                        <p class="font-medium text-gray-400 text-xs mt-2">File types JPEG, PNG (max. 2MB)</p>
                    </div>
                    <input name="background" id="fileBg" type="file" class="hidden" required>
                </label>
            </div>
            <div class="mb-4" onclick="imgPreviewProduct()">
                <label class="text-gray-800 block mb-2 font-bold text-sm tracking-wide" for="lEventDetail">Product Image</label>
                <label for="fileProduct"
                    class="flex flex-col justify-center items-center w-56 h-44 rounded-lg cursor-pointer">
                    <img src="{{ asset('images/bg-gray.jpg') }}" alt="" class="rounded-lg w-56 h-44 object-cover" id="photoProduct">
                    <div class="iconProduct absolute flex flex-col justify-center items-center pt-5 pb-6">
                        <i class="bx-md text-gray-500"></i>
                        <img src="https://img.icons8.com/material-outlined/96/a1a1aa/add-image.png" alt="" class="w-10">
                        <p class="font-medium text-gray-400 text-xs mt-2">File types JPEG, PNG (max. 2MB)</p>
                    </div>
                    <input name="product_image" id="fileProduct" type="file" class="hidden" required>
                </label>
            </div>
            <div class="mt-8 text-right">
                <button type="button"
                    class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest text-sm" id="modalCloseNewPost">
                    CANCEL
                </button>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest text-sm">
                    CREATE
                </button>
            </div>
        </div>
    </form>
    </div>
</div>
<!-- /Modal -->

<!-- Product Edit Modal -->
{{-- <form action="" method="post"></form>
<div id="editProductModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full overflow-x-hidden overflow-y-auto">
    <div class="p-4 max-w-xl mx-auto absolute left-0 right-0">
        <div id="editProductClose" class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
            </svg>
        </div>
        <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">
            <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Add Product</h2>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                    for="lName">Name</label>
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="lName" name="" type="text" placeholder="Banyumax"  >
            </div>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                    for="lTagline">Tagline</label>
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="lTagline" name="" type="text" placeholder="Integrated CS Software for Maximum Business Development"  >
            </div>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                    for="lUrl">URL</label>
                <input
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="lUrl" name="" type="text" placeholder="https://www.banyumax.id"  >
            </div>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide"
                    for="office">Product Type</label>
                <select name=""
                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-36 py-2 p-4 text-slate-400 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="">
                    Office Name <img src="https://img.icons8.com/ios-glyphs/30/a1a1aa/sort-down.png"
                        class="inline-flex w-5" />
                    <div class="absolute mx-2 inline-flex">
                        <ul class="bg-gray-100 drop-shadow-lg rounded py-2"> --}}
                            {{-- @foreach ($offices as $office) --}}
                                {{-- <li class="hover:bg-gray-200 py-2">
                                    <a href="#" class="block p-1 mx-7">
                                        <option value="{{ $office->id }}">{{ $office->office_name }}</option>
                                    </a>
                                </li> --}}
                                {{-- <li class="hover:bg-gray-200 py-2" >
                                    <a href="#" class="block p-1 mx-7" >
                                        <option value="Software">Software</option>
                                        <option value="Design">Design</option>
                                        <option value="Marketing">Marketing</option>
                                    </a>
                                </li> --}}
                            {{-- @endforeach --}}

                        {{-- </ul>
                    </div>
                </select>
            </div>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lEvent">Caption</label>
                <textarea name="caption" id="caption_store" maxlength="550" class="bg-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 border-0 appearance-none h-40 p-3 mt-2 w-[370px] md:w-[480px]" placeholder="Caption (max. 550 Words)"></textarea>
            </div>
            <div class="mb-4" onclick="imgPreviewEditLogo()">
                <label class="text-gray-800 block mb-2 font-bold text-sm tracking-wide" for="lEventDetail">Logo</label>
                <label for="fileEditLogo"
                    class="flex flex-col justify-center items-center w-56 h-44 rounded-lg cursor-pointer">
                    <img src="{{ asset('images/bg-gray.jpg') }}" alt="" class="rounded-lg w-56 h-44 object-cover" id="photoEditLogo">
                    <div class="iconEditLogo absolute flex flex-col justify-center items-center pt-5 pb-6">
                        <i class="bx-md text-gray-500"></i>
                        <img src="https://img.icons8.com/material-outlined/96/a1a1aa/add-image.png" alt="" class="w-10">
                        <p class="font-medium text-gray-400 text-xs mt-2">File types PNG (max. 2MB)</p>
                    </div>
                    <input name="" id="fileEditLogo" type="file" class="hidden">
                </label>
            </div>
            <div class="mb-4" onclick="imgPreviewEditBg()">
                <label class="text-gray-800 block mb-2 font-bold text-sm tracking-wide" for="lEventDetail">Background</label>
                <label for="fileEditBg"
                    class="flex flex-col justify-center items-center w-56 h-44 rounded-lg cursor-pointer">
                    <img src="{{ asset('images/bg-gray.jpg') }}" alt="" class="rounded-lg w-56 h-44 object-cover" id="photoEditBg">
                    <div class="iconEditBg absolute flex flex-col justify-center items-center pt-5 pb-6">
                        <i class="bx-md text-gray-500"></i>
                        <img src="https://img.icons8.com/material-outlined/96/a1a1aa/add-image.png" alt="" class="w-10">
                        <p class="font-medium text-gray-400 text-xs mt-2">File types JPEG, PNG (max. 2MB)</p>
                    </div>
                    <input name="" id="fileEditBg" type="file" class="hidden">
                </label>
            </div>
            <div class="mb-4" onclick="imgPreviewEditProduct()">
                <label class="text-gray-800 block mb-2 font-bold text-sm tracking-wide" for="lEventDetail">Product Image</label>
                <label for="fileEditProduct"
                    class="flex flex-col justify-center items-center w-56 h-44 rounded-lg cursor-pointer">
                    <img src="{{ asset('images/bg-gray.jpg') }}" alt="" class="rounded-lg w-56 h-44 object-cover" id="photoEditProduct">
                    <div class="iconEditProduct absolute flex flex-col justify-center items-center pt-5 pb-6">
                        <i class="bx-md text-gray-500"></i>
                        <img src="https://img.icons8.com/material-outlined/96/a1a1aa/add-image.png" alt="" class="w-10">
                        <p class="font-medium text-gray-400 text-xs mt-2">File types JPEG, PNG (max. 2MB)</p>
                    </div>
                    <input name="" id="fileEditProduct" type="file" class="hidden">
                </label>
            </div>
            <div class="mt-8 text-right">
                <button type="button"
                    class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest text-sm" id="editModalCloseProduct">
                    CANCEL
                </button>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest text-sm">
                    CREATE
                </button>
            </div>
        </div>
    </div>
</div> --}}
<!-- /Modal -->

{{-- <livewire:delete-product> --}}


<script>

    // Modal Add Product
    function imgPreviewLogo() {
        const img = document.querySelector('#photo');
        const icon = document.querySelector('.icon');

            file.addEventListener("change", function () {
            //this refers to file
            const choosedFile = this.files[0];

            if (choosedFile) {
                const reader = new FileReader(); //FileReader is a predefined function of JS

                reader.addEventListener("load", function () {
                img.setAttribute("src", reader.result);
                icon.style.display = "none";
                });

                reader.readAsDataURL(choosedFile);
            }
            });
    }

    function imgPreviewBg() {
        const imgBg = document.querySelector('#photoBg');
        const iconBg = document.querySelector('.iconBg');

            fileBg.addEventListener("change", function () {
            //this refers to file
            const choosedFile = this.files[0];

            if (choosedFile) {
                const reader = new FileReader(); //FileReader is a predefined function of JS

                reader.addEventListener("load", function () {
                imgBg.setAttribute("src", reader.result);
                iconBg.style.display = "none";
                });

                reader.readAsDataURL(choosedFile);
            }
            });
    }

    function imgPreviewProduct() {
        const imgProduct = document.querySelector('#photoProduct');
        const iconProduct = document.querySelector('.iconProduct');

            fileProduct.addEventListener("change", function () {
            //this refers to file
            const choosedFile = this.files[0];

            if (choosedFile) {
                const reader = new FileReader(); //FileReader is a predefined function of JS

                reader.addEventListener("load", function () {
                imgProduct.setAttribute("src", reader.result);
                iconProduct.style.display = "none";
                });

                reader.readAsDataURL(choosedFile);
            }
            });
    }


    // Modal Edit Product
    // function imgPreviewEditLogo() {
    //     const imgEditLogo = document.querySelector('#photoEditLogo');
    //     const iconEditLogo = document.querySelector('.iconEditLogo');

    //         fileEditLogo.addEventListener("change", function () {
    //         //this refers to file
    //         const choosedFile = this.files[0];

    //         if (choosedFile) {
    //             const reader = new FileReader(); //FileReader is a predefined function of JS

    //             reader.addEventListener("load", function () {
    //             imgEditLogo.setAttribute("src", reader.result);
    //             iconEditLogo.style.display = "none";
    //             });

    //             reader.readAsDataURL(choosedFile);
    //         }
    //         });
    // }

    // function imgPreviewEditBg() {
    //     const imgEditBg = document.querySelector('#photoEditBg');
    //     const iconEditBg = document.querySelector('.iconEditBg');

    //         fileEditBg.addEventListener("change", function () {
    //         //this refers to file
    //         const choosedFile = this.files[0];

    //         if (choosedFile) {
    //             const reader = new FileReader(); //FileReader is a predefined function of JS

    //             reader.addEventListener("load", function () {
    //             imgEditBg.setAttribute("src", reader.result);
    //             iconEditBg.style.display = "none";
    //             });

    //             reader.readAsDataURL(choosedFile);
    //         }
    //         });
    // }

    // function imgPreviewEditProduct() {
    //     const imgEditProduct = document.querySelector('#photoEditProduct');
    //     const iconEditProduct = document.querySelector('.iconEditProduct');

    //         fileEditProduct.addEventListener("change", function () {
    //         //this refers to file
    //         const choosedFile = this.files[0];

    //         if (choosedFile) {
    //             const reader = new FileReader(); //FileReader is a predefined function of JS

    //             reader.addEventListener("load", function () {
    //             imgEditProduct.setAttribute("src", reader.result);
    //             iconEditProduct.style.display = "none";
    //             });

    //             reader.readAsDataURL(choosedFile);
    //         }
    //         });
    // }


        // Add Product Modal
        const newProductModal = document.querySelector('#newProductModal');
        const showNewProduct = document.querySelector('#showNewProduct');
        const productClose = document.querySelector('#productClose');
        const modalCloseNewPost = document.querySelector('#modalCloseNewPost');

        const newPost = () => {
            newProductModal.classList.toggle('hidden');
        }
        showNewProduct.addEventListener('click', newPost)
        productClose.addEventListener('click', newPost)
        modalCloseNewPost.addEventListener('click', newPost)

        // // Edit Product Modal
        // const editModal = document.querySelector('#editModal');
        // const editProductModal = document.querySelector('#editProductModal');
        // const editProductClose = document.querySelector('#editProductClose');
        // const editModalCloseProduct = document.querySelector('#editModalCloseProduct');

        // const editModalProduct = () => {
        //     editProductModal.classList.toggle('hidden');
        // }

        // editModal.addEventListener('click', editModalProduct);
        // editProductClose.addEventListener('click', editModalProduct);
        // editModalCloseProduct.addEventListener('click', editModalProduct);



        // Delete Modal
        // const deleteModal = document.querySelector('#deleteModal');
        // const overlayModal = document.querySelector('#overlayModal');
        // const cancelBtn = document.querySelector('#cancelBtn');

        // const deleteModalProduct = () => {
        //     overlayModal.classList.toggle('hidden');
        // }

        // deleteModal.addEventListener('click', deleteModalProduct);
        // cancelBtn.addEventListener('click', deleteModalProduct);

        // function delete_product(id){
        //     deleteModal()
        //     $('#delete_form').attr('action',`${window.location.origin}/delete-user/${id}`)
        // }
    </script>
