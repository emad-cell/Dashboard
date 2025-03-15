<!-- زر لفتح نافذة اختيار الملف -->
<button onclick="triggerFileInput()" class="btn btn-primary">
    Upload Image
</button>

<!-- ملف الإدخال المخفي -->
<input type="file" id="imageInput" style="display: none;" name="image" accept="image/*">

<script>
    function triggerFileInput() {
        document.getElementById('imageInput').click();
    }

    // عند اختيار الصورة
    document.getElementById('imageInput').addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (!file) return;

        const formData = new FormData();
        formData.append('image', file); // تأكد أن الاسم 'image' يتطابق مع ما تتوقعه في الـController

        // إرسال البيانات عبر AJAX
        fetch('{{ route('admin.companies.store') }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            },
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
            //         // إضافة الصورة الجديدة إلى الواجهة دون إعادة تحميل الصفحة
            //         const imgContainer = document.getElementById('images-container');
            //         imgContainer.innerHTML += `
            //     <div class="image-item">
            //         <img src="${data.image_url}" class="img-thumbnail">
            //     </div>
            // `;
             window.location.reload();
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>
