// --------------------------- Modal ------------------------------
function showConfirmationModal(option) {
    if (option === 'add') {
        document.getElementById('addConfirmationModal').style.display = 'block';
    } else if (option === 'update') {
        document.getElementById('updateConfirmationModal').style.display = 'block';
    } else if (option === 'delete') {
        document.getElementById('deleteConfirmationModal').style.display = 'block';
    } else {
        alert('Cannot find modal');
    }
}
function closeModal(option) {
    if (option === 'add') {
        document.getElementById('addConfirmationModal').style.display = 'none';
    } else if (option === 'update') {
        document.getElementById('updateConfirmationModal').style.display = 'none';
    } else if (option === 'delete') {
        document.getElementById('deleteConfirmationModal').style.display = 'none';
    } else {
        alert('Cannot close modal');
    }
}
function onConfirm() {
    document.getElementById('dataForm').submit();
}
// --------------------------- Modal ------------------------------
function formatPrice(value) {
    let sanitizedValue = value.replace(/\./g, '').replace(/[^0-9]/g, '');
    return sanitizedValue ? new Intl.NumberFormat('id-ID').format(sanitizedValue) : '0';
}
function typePrice(input) {
    let value = input.value.replace(/\./g, '').replace(/[^0-9]/g, '');
    if (value) {
        input.value = new Intl.NumberFormat('id-ID').format(value);
    } else {
        input.value = '0';
    }
}
// --------------------------- FormData ------------------------------
function showForm(mode, source, id = null) {
    document.querySelector('.order').style.display = 'none';
    document.querySelector('#formData').style.display = 'block';
    const title = document.querySelector('.title-form');
    const submit = document.querySelector('.submit');
    const textareas = document.querySelectorAll('textarea');
    const round = document.querySelector('.round');
    const form = document.querySelector('#dataForm');

    const idData = form.querySelector('input[name="id"]');
    const sourceData = form.querySelector('input[name="source"]');

    function autoResizeTextarea() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    }
    textareas.forEach(textarea => {
        textarea.style.height = '42px';
        textarea.addEventListener('input', autoResizeTextarea);
        textarea.addEventListener('focus', autoResizeTextarea);
    });

    if (mode === 'add' && id === null) {
        form.reset();
        idData.value = null;
        sourceData.value = source;
        form.action = 'action/add';
        title.textContent = 'Add';
        submit.querySelector('.btnText').textContent = 'Add';
        submit.name = mode;
        submit.onclick = function(event) {
            event.preventDefault();
            showConfirmationModal(mode);
        };
    } else if (mode === 'update' && id !== null) {
        form.action = 'action/update';
        title.textContent = 'Update';
        submit.querySelector('.btnText').textContent = 'Update';
        submit.name = mode;
        submit.onclick = function(event) {
            event.preventDefault();
            showConfirmationModal(mode);
        };

        $.ajax({
            url: 'proccess/getData.php',
            method: 'GET',
            data: { id, source },
            dataType: 'json',
            success: function(data) {
                if (!data.error) {
                    if (source === 'trip') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('input[name="name"]').val(data.name);
                        $('textarea[name="sub"]').val(data.sub);
                        $('input[name="price"]').val(formatPrice(data.price));
                        $('input[name="aft_price"]').val(formatPrice(data.aft_price));
                        $('input[name="seat"]').val(formatPrice(data.seat));
                        $('input[name="from_date"]').val(data.from_date);
                        $('input[name="to_date"]').val(data.to_date);
                        $('select[name="type"]').val(data.type);
                        $('select[name="active"]').val(data.is_active);
                        $('input[name="meet"]').val(data.meet);
                        $('input[name="location"]').val(data.location);
                        $('select[name="asia"]').val(data.is_asia);
                        $('textarea[name="detail"]').val(data.detail);
                        $('textarea[name="include"]').val(data.include);
                        $('textarea[name="exclude"]').val(data.exclude);
                        $('textarea[name="s_k"]').val(data.s_k);

                        if (data.file) {
                            $('.preview').attr('src', '../storage/trip/' + data.file).show();
                        }
                    } else {
                        alert('Error No Type');
                    }
                } else {
                    alert('Error fetching data');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    } else if (mode === 'delete' && id !== null) {
        form.action = 'action/delete';
        title.textContent = 'Delete';
        round.style.display = 'none';
        submit.querySelector('.btnText').textContent = 'Delete';
        submit.name = mode;
        submit.onclick = function(event) {
            event.preventDefault();
            showConfirmationModal(mode);
        };

        $.ajax({
            url: 'proccess/getData.php',
            method: 'GET',
            data: { id, source },
            dataType: 'json',
            success: function(data) {
                if (!data.error) {
                    if (source === 'trip') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('input[name="name"]').val(data.name).prop('readonly', true);
                        $('textarea[name="sub"]').val(data.sub).prop('readonly', true);
                        $('input[name="price"]').val(formatPrice(data.price)).prop('readonly', true);
                        $('input[name="aft_price"]').val(formatPrice(data.aft_price)).prop('readonly', true);
                        $('input[name="seat"]').val(formatPrice(data.seat)).prop('readonly', true);
                        $('input[name="from_date"]').val(data.from_date).prop('readonly', true);
                        $('input[name="to_date"]').val(data.to_date).prop('readonly', true);
                        $('select[name="type"]').val(data.type).prop('disabled', true);
                        $('select[name="active"]').val(data.is_active).prop('disabled', true);
                        $('input[name="meet"]').val(data.meet).prop('readonly', true);
                        $('input[name="location"]').val(data.location).prop('readonly', true);
                        $('select[name="asia"]').val(data.is_asia).prop('disabled', true);
                        $('textarea[name="detail"]').val(data.detail).prop('readonly', true);
                        $('textarea[name="include"]').val(data.include).prop('readonly', true);
                        $('textarea[name="exclude"]').val(data.exclude).prop('readonly', true);
                        $('textarea[name="s_k"]').val(data.s_k).prop('readonly', true);

                        if (data.file) {
                            $('.preview').attr('src', '../storage/trip/' + data.file).show();
                        }
                    } else {
                        alert('Error No Type');
                    }
                } else {
                    alert('Error fetching data');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    } else if (mode === 'view' && id !== null) {
        form.removeAttribute('action');
        title.textContent = 'View';
        submit.style.display = 'none';
        round.style.display = 'none';

        $.ajax({
            url: 'proccess/getData.php',
            method: 'GET',
            data: { id, source },
            dataType: 'json',
            success: function(data) {
                if (!data.error) {
                    if (source === 'trip') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('input[name="name"]').val(data.name).prop('readonly', true);
                        $('textarea[name="sub"]').val(data.sub).prop('readonly', true);
                        $('input[name="price"]').val(formatPrice(data.price)).prop('readonly', true);
                        $('input[name="aft_price"]').val(formatPrice(data.aft_price)).prop('readonly', true);
                        $('input[name="seat"]').val(formatPrice(data.seat)).prop('readonly', true);
                        $('input[name="from_date"]').val(data.from_date).prop('readonly', true);
                        $('input[name="to_date"]').val(data.to_date).prop('readonly', true);
                        $('select[name="type"]').val(data.type).prop('disabled', true);
                        $('select[name="active"]').val(data.is_active).prop('disabled', true);
                        $('input[name="meet"]').val(data.meet).prop('readonly', true);
                        $('input[name="location"]').val(data.location).prop('readonly', true);
                        $('select[name="asia"]').val(data.is_asia).prop('disabled', true);
                        $('textarea[name="detail"]').val(data.detail).prop('readonly', true);
                        $('textarea[name="include"]').val(data.include).prop('readonly', true);
                        $('textarea[name="exclude"]').val(data.exclude).prop('readonly', true);
                        $('textarea[name="s_k"]').val(data.s_k).prop('readonly', true);

                        if (data.file) {
                            $('.preview').attr('src', '../storage/trip/' + data.file).show();
                        }
                    } else {
                        alert('Error No Type');
                    }
                } else {
                    alert('Error fetching data');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }
}

function hideForm() {
    document.querySelector('#formData').style.display = 'none';
    document.querySelector('#dataForm').classList.remove('secActive');
    document.querySelector('.order').style.display = 'block';
    const submit = document.querySelector('.submit');
    const round = document.querySelector('.round');
    const preview = document.querySelector('.preview');
    submit.style.display = 'block';
    round.style.display = 'grid';
    preview.removeAttribute('src');
    document.querySelectorAll('input[readonly], textarea[readonly]').forEach(function(element) {
        element.removeAttribute('readonly');
    });
    document.querySelectorAll('select[disabled]').forEach(function(element) {
        element.removeAttribute('disabled');
    });
}
// --------------------------- FormData ------------------------------