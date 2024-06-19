@extends('layouts.admin.dashboard')

@section('body')
    <section class="body-dashboard">
        <div class="body-dashboard__header">
            <h1 class="body-dashboard__header__title">Welcome back, <span>{{ $user->username }}</span></h1>
            <h2 class="body-dashboard__header__subtitle">Dashboard Overview</h2>
        </div>

        <div class="body-dashboard__body">
            <div class="body-dashboard__body__wrapper">
                <article class="body-dashboard__body__card">
                    <div class="body-dashboard__body__card__wrapper">
                        <h1 class="body-dashboard__body__card__wrapper__title">Employee</h1>
                        <p class="body-dashboard__body__card__wrapper__number">103</p>
                        <p class="body-dashboard__body__card__wrapper__total">Total</p>
                    </div>
                    <svg width="64px" height="64px" viewBox="0 0 91 91" enable-background="new 0 0 91 91" id="Layer_1"
                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path
                                        d="M25.773,50.997c11.08,0,20.092-9.078,20.092-20.232c0-11.156-9.012-20.232-20.092-20.232 c-11.074,0-20.08,9.076-20.08,20.232C5.693,41.919,14.699,50.997,25.773,50.997z"
                                        fill="#647F94"></path>
                                    <path
                                        d="M43.023,48.44c-3.17,3.129-7.176,5.391-11.646,6.443l4.664,23.918c0.176,0.842-0.137,1.707-0.807,2.242 l-2.006,1.605c5.594-0.668,11.654-2.127,18.006-4.789V60.106C51.234,54.845,48.52,51.026,43.023,48.44z"
                                        fill="#647F94"></path>
                                    <polygon fill="#6EC4A7"
                                        points="24.941,55.739 20.613,78.36 25.959,82.636 31.295,78.362 26.9,55.739 ">
                                    </polygon>
                                    <path
                                        d="M20.453,54.956c-4.576-1.02-8.676-3.313-11.908-6.5c-5.266,2.58-7.865,6.393-7.865,11.65v17.84 c2.531,1.176,9.049,3.826,18.115,4.795l-2.119-1.695c-0.666-0.533-0.982-1.398-0.809-2.238L20.453,54.956z"
                                        fill="#647F94"></path>
                                </g>
                                <path
                                    d="M71.557,16.685c-10.502,0-19.045,8.545-19.045,19.051c0,10.504,8.543,19.051,19.045,19.051 c10.506,0,19.055-8.547,19.055-19.051C90.611,25.229,82.063,16.685,71.557,16.685z M79.301,38.407H63.416 c-1.383,0-2.506-1.121-2.506-2.506c0-1.383,1.123-2.504,2.506-2.504h15.885c1.383,0,2.504,1.121,2.504,2.504 C81.805,37.286,80.684,38.407,79.301,38.407z"
                                    fill="#6EC4A7"></path>
                            </g>
                        </g>
                    </svg>
                </article>
                <article class="body-dashboard__body__card">
                    <div class="body-dashboard__body__card__wrapper">
                        <h1 class="body-dashboard__body__card__wrapper__title">Employee</h1>
                        <p class="body-dashboard__body__card__wrapper__number">103</p>
                        <p class="body-dashboard__body__card__wrapper__total">Total</p>
                    </div>
                    <svg width="64px" height="64px" viewBox="0 0 91 91" enable-background="new 0 0 91 91" id="Layer_1"
                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path
                                        d="M25.773,50.997c11.08,0,20.092-9.078,20.092-20.232c0-11.156-9.012-20.232-20.092-20.232 c-11.074,0-20.08,9.076-20.08,20.232C5.693,41.919,14.699,50.997,25.773,50.997z"
                                        fill="#647F94"></path>
                                    <path
                                        d="M43.023,48.44c-3.17,3.129-7.176,5.391-11.646,6.443l4.664,23.918c0.176,0.842-0.137,1.707-0.807,2.242 l-2.006,1.605c5.594-0.668,11.654-2.127,18.006-4.789V60.106C51.234,54.845,48.52,51.026,43.023,48.44z"
                                        fill="#647F94"></path>
                                    <polygon fill="#6EC4A7"
                                        points="24.941,55.739 20.613,78.36 25.959,82.636 31.295,78.362 26.9,55.739 ">
                                    </polygon>
                                    <path
                                        d="M20.453,54.956c-4.576-1.02-8.676-3.313-11.908-6.5c-5.266,2.58-7.865,6.393-7.865,11.65v17.84 c2.531,1.176,9.049,3.826,18.115,4.795l-2.119-1.695c-0.666-0.533-0.982-1.398-0.809-2.238L20.453,54.956z"
                                        fill="#647F94"></path>
                                </g>
                                <path
                                    d="M71.557,16.685c-10.502,0-19.045,8.545-19.045,19.051c0,10.504,8.543,19.051,19.045,19.051 c10.506,0,19.055-8.547,19.055-19.051C90.611,25.229,82.063,16.685,71.557,16.685z M79.301,38.407H63.416 c-1.383,0-2.506-1.121-2.506-2.506c0-1.383,1.123-2.504,2.506-2.504h15.885c1.383,0,2.504,1.121,2.504,2.504 C81.805,37.286,80.684,38.407,79.301,38.407z"
                                    fill="#6EC4A7"></path>
                            </g>
                        </g>
                    </svg>
                </article>
                <article class="body-dashboard__body__card">
                    <div class="body-dashboard__body__card__wrapper">
                        <h1 class="body-dashboard__body__card__wrapper__title">Employee</h1>
                        <p class="body-dashboard__body__card__wrapper__number">103</p>
                        <p class="body-dashboard__body__card__wrapper__total">Total</p>
                    </div>
                    <svg width="64px" height="64px" viewBox="0 0 91 91" enable-background="new 0 0 91 91" id="Layer_1"
                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path
                                        d="M25.773,50.997c11.08,0,20.092-9.078,20.092-20.232c0-11.156-9.012-20.232-20.092-20.232 c-11.074,0-20.08,9.076-20.08,20.232C5.693,41.919,14.699,50.997,25.773,50.997z"
                                        fill="#647F94"></path>
                                    <path
                                        d="M43.023,48.44c-3.17,3.129-7.176,5.391-11.646,6.443l4.664,23.918c0.176,0.842-0.137,1.707-0.807,2.242 l-2.006,1.605c5.594-0.668,11.654-2.127,18.006-4.789V60.106C51.234,54.845,48.52,51.026,43.023,48.44z"
                                        fill="#647F94"></path>
                                    <polygon fill="#6EC4A7"
                                        points="24.941,55.739 20.613,78.36 25.959,82.636 31.295,78.362 26.9,55.739 ">
                                    </polygon>
                                    <path
                                        d="M20.453,54.956c-4.576-1.02-8.676-3.313-11.908-6.5c-5.266,2.58-7.865,6.393-7.865,11.65v17.84 c2.531,1.176,9.049,3.826,18.115,4.795l-2.119-1.695c-0.666-0.533-0.982-1.398-0.809-2.238L20.453,54.956z"
                                        fill="#647F94"></path>
                                </g>
                                <path
                                    d="M71.557,16.685c-10.502,0-19.045,8.545-19.045,19.051c0,10.504,8.543,19.051,19.045,19.051 c10.506,0,19.055-8.547,19.055-19.051C90.611,25.229,82.063,16.685,71.557,16.685z M79.301,38.407H63.416 c-1.383,0-2.506-1.121-2.506-2.506c0-1.383,1.123-2.504,2.506-2.504h15.885c1.383,0,2.504,1.121,2.504,2.504 C81.805,37.286,80.684,38.407,79.301,38.407z"
                                    fill="#6EC4A7"></path>
                            </g>
                        </g>
                    </svg>
                </article>
            </div>
        </div>

        <div class="body-dashboard__chart">
            <h1 class="body-dashboard__chart__title">Statistic notes</h1>
            <canvas id="myLineChart" class="body-dashboard__chart__canvas"></canvas>
        </div>

        <div class="body-dashboard__table">
            <table class="body-dashboard__table__inner table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td class="body-dashboard__table__action">
                                <button type="button" class="btn btn-warning edit-button" data-id="{{ $user->id }}"
                                    data-username="{{ $user->username }}" data-email="{{ $user->email }}"
                                    data-role="{{ $user->role }}" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Edit</button>
                                <button class="btn btn-danger" data-id="{{ $user->id }}" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <x-ui.modal.edit title="user" />
    <x-ui.modal.delete />

    @push('scripts')
        <script>
            // STATISTIC NOTES
            document.addEventListener('DOMContentLoaded', function() {
                const lineCtx = document.getElementById('myLineChart').getContext('2d');

                // Grafik Garis
                new Chart(lineCtx, {
                    type: 'line',
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June',
                            'July'
                        ], // Label manual
                        datasets: [{
                            label: 'My First Dataset',
                            data: [65, 59, 80, 81, 56, 55, 40],
                            fill: false,
                            borderColor: 'rgb(75, 192, 192)',
                            tension: 0.1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                stacked: true
                            }
                        }
                    }
                });
            });

            // EDIT USER
            document.addEventListener('DOMContentLoaded', (event) => {
                var exampleModal = document.getElementById('exampleModal');
                exampleModal.addEventListener('show.bs.modal', function(event) {
                    var button = event.relatedTarget;
                    var userId = button.getAttribute('data-id');
                    var username = button.getAttribute('data-username');
                    var email = button.getAttribute('data-email');
                    var role = button.getAttribute('data-role');

                    var modalTitle = exampleModal.querySelector('.modal-title');
                    var modalForm = exampleModal.querySelector('#editUserForm');
                    var modalUsername = exampleModal.querySelector('#username');
                    var modalEmail = exampleModal.querySelector('#email');
                    var modalRole = exampleModal.querySelector('#role');

                    modalTitle.textContent = 'Edit User ' + username;
                    modalForm.action = modalForm.action.replace('user_id', userId);
                    modalUsername.value = username;
                    modalEmail.value = email;
                    modalRole.value = role;
                });
            });

            // DELETE USER
            document.addEventListener('DOMContentLoaded', (event) => {
                var deleteModal = document.getElementById('deleteModal');
                deleteModal.addEventListener('show.bs.modal', function(event) {
                    var button = event.relatedTarget;
                    var userId = button.getAttribute('data-id');

                    var modalForm = deleteModal.querySelector('#deleteUserForm');
                    modalForm.action = modalForm.action.replace('user_id', userId);
                });

                // Reset the form action when modal is hidden
                deleteModal.addEventListener('hidden.bs.modal', function(event) {
                    var modalForm = deleteModal.querySelector('#deleteUserForm');
                    modalForm.action = "{{ route('user.destroy', 'user_id') }}";
                });
            });
        </script>
    @endpush
@endSection
