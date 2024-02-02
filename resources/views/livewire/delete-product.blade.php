<div>
<!-- Delete Confirmation -->
<form action="/delete-product/{id}" id="delete_form" method="POST" enctype="multipart/form-data">
    @csrf
    @method('DELETE')

<div class="hidden bg-black bg-opacity-50 fixed inset-0 z-40 w-full" id="overlayModal">
<div class="relative w-auto my-6 mx-auto max-w-xl">
    <!--content-->
    <div class="absolute border-0 rounded-lg shadow-lg flex flex-row max-w-xl bg-white outline-none focus:outline-none p-6 top-52">
        <img src="{{ asset('images/new/delete-illustrations.svg') }}" alt="">
        <div class="">
            <h3 class="text-2xl font-semibold text-start">
                Delete Confirmation
            </h3>
            <p class="font-semibold text-lg pt-2 text-gray-500">Are you sure want to delete this Article ?</p>
            <div class="mt-8">
                <button type="button" class="px-6 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 focus:bg-gray-600 text-white font-semibold mr-4" id="cancelBtn">CANCEL</button>
                <button type="submit" class="px-6 py-2 rounded-lg bg-red-500 hover:bg-red-600 focus:bg-red-700 text-white font-semibold">DELETE</button>
            </div>
        </div>
    </div>
</div>
</div>
</form>
<!-- /Delete Confirmation -->

</div>

<script>
// Delete Modal
const deleteModal = document.querySelector('#deleteModal');
const overlayModal = document.querySelector('#overlayModal');
const cancelBtn = document.querySelector('#cancelBtn');

const deleteModalProduct = () => {
    overlayModal.classList.toggle('hidden');
}

deleteModal.addEventListener('click', deleteModalProduct);
cancelBtn.addEventListener('click', deleteModalProduct);

window.livewire.on('/delete-product/{id}',()=>{
    $('[delete')
});

// function delete_user(id){
//     deleteModalProduct()
//     console.log(id);
//     $('#delete_form').attr('action',`${window.location.origin}/delete-product/${id}`)
// }


</script>
