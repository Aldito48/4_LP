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

// --------------------------- NumberFormat ------------------------------
function formatingNumber(value) {
    let sanitizedValue = value.replace(/\./g, '').replace(/[^0-9]/g, '');
    return sanitizedValue ? new Intl.NumberFormat('id-ID').format(sanitizedValue) : '0';
}
function typingNumber(input) {
    let value = input.value.replace(/\./g, '').replace(/[^0-9]/g, '');
    if (value) {
        input.value = new Intl.NumberFormat('id-ID').format(value);
    } else {
        input.value = '0';
    }
}
// --------------------------- NumberFormat ------------------------------

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
                        $('input[name="price"]').val(formatingNumber(data.price));
                        $('input[name="aft_price"]').val(formatingNumber(data.aft_price));
                        $('input[name="seat"]').val(formatingNumber(data.seat));
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
                    } else if (source === 'itinerary') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('select[name="trip"]').val(data.id_trip);
                        $('input[name="day"]').val(formatingNumber(data.day));
                        $('input[name="title"]').val(data.title);
                        $('textarea[name="experience"]').val(data.experience);
                        $('input[name="transportation"]').val(data.transportation);

                        if (data.image) {
                            $('.preview').attr('src', '../storage/itinerary/' + data.image).show();
                        }
                    } else if (source === 'schedule') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('select[name="trip"]').val(data.id_trip);
                        $('input[name="january"]').val(data.january);
                        $('input[name="february"]').val(data.february);
                        $('input[name="march"]').val(data.march);
                        $('input[name="april"]').val(data.april);
                        $('input[name="may"]').val(data.may);
                        $('input[name="june"]').val(data.june);
                        $('input[name="july"]').val(data.july);
                        $('input[name="august"]').val(data.august);
                        $('input[name="september"]').val(data.september);
                        $('input[name="october"]').val(data.october);
                        $('input[name="november"]').val(data.november);
                        $('input[name="december"]').val(data.december);
                    } else if (source === 'slider') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('select[name="trip"]').val(data.id_trip);
                        $('input[name="sort"]').val(formatingNumber(data.sort));

                        if (data.photo) {
                            $('.preview').attr('src', '../storage/slider/' + data.photo).show();
                        }
                    }  else if (source === 'galery') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);

                        if (data.file) {
                            $('.preview').attr('src', '../storage/galery/' + data.file).show();
                        }
                    } else if (source === 'mitra') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('input[name="name"]').val(data.name);

                        if (data.file) {
                            $('.preview').attr('src', '../storage/mitra/' + data.file).show();
                        }
                    } else if (source === 'review') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('input[name="name"]').val(data.name);
                        $('input[name="message"]').val(data.message);
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
        if (round) {
            round.style.display = 'none';
        }
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
                        $('input[name="price"]').val(formatingNumber(data.price)).prop('readonly', true);
                        $('input[name="aft_price"]').val(formatingNumber(data.aft_price)).prop('readonly', true);
                        $('input[name="seat"]').val(formatingNumber(data.seat)).prop('readonly', true);
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
                    } else if (source === 'itinerary') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('select[name="trip"]').val(data.id_trip).prop('disabled', true);
                        $('input[name="day"]').val(formatingNumber(data.day)).prop('readonly', true);
                        $('input[name="title"]').val(data.title).prop('readonly', true);
                        $('textarea[name="experience"]').val(data.experience).prop('readonly', true);
                        $('input[name="transportation"]').val(data.transportation).prop('readonly', true);

                        if (data.image) {
                            $('.preview').attr('src', '../storage/itinerary/' + data.image).show();
                        }
                    } else if (source === 'schedule') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('select[name="trip"]').val(data.id_trip).prop('disabled', true);
                        $('input[name="january"]').val(data.january).prop('readonly', true);
                        $('input[name="february"]').val(data.february).prop('readonly', true);
                        $('input[name="march"]').val(data.march).prop('readonly', true);
                        $('input[name="april"]').val(data.april).prop('readonly', true);
                        $('input[name="may"]').val(data.may).prop('readonly', true);
                        $('input[name="june"]').val(data.june).prop('readonly', true);
                        $('input[name="july"]').val(data.july).prop('readonly', true);
                        $('input[name="august"]').val(data.august).prop('readonly', true);
                        $('input[name="september"]').val(data.september).prop('readonly', true);
                        $('input[name="october"]').val(data.october).prop('readonly', true);
                        $('input[name="november"]').val(data.november).prop('readonly', true);
                        $('input[name="december"]').val(data.december).prop('readonly', true);
                    } else if (source === 'slider') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('select[name="trip"]').val(data.id_trip).prop('disabled', true);
                        $('input[name="sort"]').val(formatingNumber(data.sort)).prop('readonly', true);

                        if (data.photo) {
                            $('.preview').attr('src', '../storage/slider/' + data.photo).show();
                        }
                    } else if (source === 'galery') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);

                        if (data.file) {
                            $('.preview').attr('src', '../storage/galery/' + data.file).show();
                        }
                    } else if (source === 'mitra') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('input[name="name"]').val(data.name).prop('readonly', true);

                        if (data.file) {
                            $('.preview').attr('src', '../storage/mitra/' + data.file).show();
                        }
                    } else if (source === 'review') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('input[name="name"]').val(data.name).prop('readonly', true);
                        $('input[name="message"]').val(data.message).prop('readonly', true);
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
        if (round) {
            round.style.display = 'none';
        }

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
                        $('input[name="price"]').val(formatingNumber(data.price)).prop('readonly', true);
                        $('input[name="aft_price"]').val(formatingNumber(data.aft_price)).prop('readonly', true);
                        $('input[name="seat"]').val(formatingNumber(data.seat)).prop('readonly', true);
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
                    } else if (source === 'itinerary') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('select[name="trip"]').val(data.id_trip).prop('disabled', true);
                        $('input[name="day"]').val(formatingNumber(data.day)).prop('readonly', true);
                        $('input[name="title"]').val(data.title).prop('readonly', true);
                        $('textarea[name="experience"]').val(data.experience).prop('readonly', true);
                        $('input[name="transportation"]').val(data.transportation).prop('readonly', true);

                        if (data.image) {
                            $('.preview').attr('src', '../storage/itinerary/' + data.image).show();
                        }
                    } else if (source === 'schedule') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('select[name="trip"]').val(data.id_trip).prop('disabled', true);
                        $('input[name="january"]').val(data.january).prop('readonly', true);
                        $('input[name="february"]').val(data.february).prop('readonly', true);
                        $('input[name="march"]').val(data.march).prop('readonly', true);
                        $('input[name="april"]').val(data.april).prop('readonly', true);
                        $('input[name="may"]').val(data.may).prop('readonly', true);
                        $('input[name="june"]').val(data.june).prop('readonly', true);
                        $('input[name="july"]').val(data.july).prop('readonly', true);
                        $('input[name="august"]').val(data.august).prop('readonly', true);
                        $('input[name="september"]').val(data.september).prop('readonly', true);
                        $('input[name="october"]').val(data.october).prop('readonly', true);
                        $('input[name="november"]').val(data.november).prop('readonly', true);
                        $('input[name="december"]').val(data.december).prop('readonly', true);
                    } else if (source === 'slider') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('select[name="trip"]').val(data.id_trip).prop('disabled', true);
                        $('input[name="sort"]').val(formatingNumber(data.sort)).prop('readonly', true);

                        if (data.photo) {
                            $('.preview').attr('src', '../storage/slider/' + data.photo).show();
                        }
                    } else if (source === 'galery') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);

                        if (data.file) {
                            $('.preview').attr('src', '../storage/galery/' + data.file).show();
                        }
                    } else if (source === 'mitra') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('input[name="name"]').val(data.name).prop('readonly', true);

                        if (data.file) {
                            $('.preview').attr('src', '../storage/mitra/' + data.file).show();
                        }
                    } else if (source === 'review') {
                        $('input[name="id"]').val(id);
                        $('input[name="source"]').val(source);
                        $('input[name="name"]').val(data.name).prop('readonly', true);
                        $('input[name="message"]').val(data.message).prop('readonly', true);
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
    if (round) {
        round.style.display = 'grid';
    }
    if (preview) {
        preview.removeAttribute('src');
    }
    document.querySelectorAll('input[readonly], textarea[readonly]').forEach(function(element) {
        element.removeAttribute('readonly');
    });
    document.querySelectorAll('select[disabled]').forEach(function(element) {
        element.removeAttribute('disabled');
    });
}
// --------------------------- FormData ------------------------------