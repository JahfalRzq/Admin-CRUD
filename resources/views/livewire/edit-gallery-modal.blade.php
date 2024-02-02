<!-- Gallery Edit Post Modal -->
<form action="/edit-galleryAdmin/{id}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div wire:ignore.self id="editGalleryModal" style=" background-color: rgba(0, 0, 0, 0.8); font-family: gilroy-reguler"
class="hidden fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full">
    <div class="p-4 max-w-xl mx-auto absolute left-0 right-0 overflow-hidden mt-20">
        <div id="eventEditGalleryClose" class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
            <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
            </svg>
        </div>
        <div class="shadow w-full rounded-lg bg-white overflow-hidden block p-8">
            <h2 class="font-bold text-2xl mb-6 text-gray-800 pb-2">Edit Gallery</h2>
            <div class="mb-4">
                <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide" for="lEvent">Caption</label>
                <textarea wire:model.defer ='caption' class="bg-gray-200 rounded-lg text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 border-0 appearance-none h-40 p-3 mt-2 max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl" placeholder="Caption (Max 350 Words)" maxlength="350" style="width: 480px"></textarea>
            </div>
            <div class="mb-4">
                <label class="text-gray-800 block mb-2 font-bold text-sm tracking-wide" for="lEventDetail">Media</label>
                <label for="fileEditImg"
                        class="flex flex-col justify-center items-center w-56 h-44 rounded-lg cursor-pointer">
                        <img src="{{ asset('images/bg-gray.jpg') }}" alt="" class="rounded-lg w-56 h-44 object-cover" id="photoEditImg">
                        <div class="iconEditImg absolute flex flex-col justify-center items-center pt-5 pb-6">
                            <i class="bx-md text-gray-500"></i>
                            <img src="https://img.icons8.com/material-outlined/96/a1a1aa/add-image.png" alt="" class="w-10">
                            <p class="font-medium text-gray-400 text-xs mt-2">File types PNG (max. 2MB)</p>
                        </div>
                        <input wire:model.defer = 'media' name="media" id="fileEditImg" type="file" class="hidden">
                    </label>
            </div>
            <div class="mt-8 text-right">
                <button type="button"
                    class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm mr-2 tracking-widest text-sm" id="modalCloseEditPost">
                    CANCEL
                </button>
                <button type="button"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-8 border rounded-lg shadow-sm tracking-widest text-sm">
                    SAVE CHANGES
                </button>
            </div>
        </div>
    </div>
</div>
</form>
<!-- /Modal -->


<script>

    // Preview IMG
    const imgEditImg = document.querySelector('#photoEditImg');
        const iconEditImg = document.querySelector('.iconEditImg');
    
            fileEditImg.addEventListener("change", function () {
            //this refers to file
            const choosedFile = this.files[0];
    
            if (choosedFile) {
                const reader = new FileReader(); //FileReader is a predefined function of JS
    
                reader.addEventListener("load", function () {
                imgEditImg.setAttribute("src", reader.result);
                iconEditImg.style.display = "none";
                });
    
                reader.readAsDataURL(choosedFile);
            }
            });


    // Edit Gallery Modal
        const editModal = document.querySelector('#editModal');
        const editGalleryModal = document.querySelector('#editGalleryModal');
        const eventEditGalleryClose = document.querySelector('#eventEditGalleryClose');
        const modalCloseEditPost = document.querySelector('#modalCloseEditPost');

        const editModalGallery = () => {
            editGalleryModal.classList.toggle('hidden');
        }

        editModal.addEventListener('click', editModalGallery);
        eventEditGalleryClose.addEventListener('click', editModalGallery);
        modalCloseEditPost.addEventListener('click', editModalGallery);

        window.livewire.on('/edit-galleryAdmin/{id}', () => {
            $('[editGalleryModal]').trigger('click');
        });

        // window.livewire.on('editGallery',()=>{
        //     editGalleryModal.classList.toggle('hidden');
        // })

        // function edit(id) {
        //     deleteModalEvent()
        //     $('#delete_form').attr('action',`${window.location.origin}/delete-galleryAdmin/${id}`)
        // }
        
</script>