{{-- Extends Template Layout --}}
@extends('templates.layout')

{{-- Judul Halaman  --}}
@section('title', 'Dashboard')

{{-- Actived Sidebar --}}
@section('dashboard-actived-bar')
<span class="actived-bar"></span>
@endsection
@section('dashboard-actived', 'active')
{{--  --}}

{{-- Main Content --}}
@section('content')

    {{-- Halaman Show --}}
    @section('halaman', 'Dashboard')
    <div class="container">
        <div class="row g-2">
            <div class="col-6 py-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-column">
                                <div class="col p-0" style="
                                        font-size: 24px;
                                        color: black;
                                        font-weight: 500;
                                        ">
                                    Rp 200.000
                                </div>
                                <div class="col p-0" style="font-size: 16px; color: #aaaaaa">
                                    Total Transaksi
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <svg width="37" height="37" viewBox="0 0 32 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 18V0H32V18H0ZM2 1.938V16H30V1.938H2ZM21 9C21 5.687 18.762 3 16 3H29V15H16C18.762 15 21 12.313 21 9ZM25 11C25.828 11 26.5 10.104 26.5 9C26.5 7.896 25.828 7 25 7C24.172 7 23.5 7.896 23.5 9C23.5 10.104 24.172 11 25 11ZM18.118 6.478C18.103 6.533 18.082 6.572 18.056 6.597C18.029 6.622 17.993 6.634 17.947 6.634C17.901 6.634 17.829 6.606 17.728 6.548C17.628 6.489 17.505 6.427 17.36 6.359C17.214 6.291 17.046 6.229 16.854 6.172C16.662 6.115 16.452 6.089 16.223 6.089C16.043 6.089 15.887 6.11 15.754 6.154C15.621 6.198 15.509 6.258 15.42 6.334C15.33 6.411 15.264 6.504 15.22 6.611C15.176 6.718 15.155 6.833 15.155 6.953C15.155 7.133 15.204 7.288 15.302 7.419C15.4 7.55 15.531 7.667 15.696 7.769C15.861 7.872 16.047 7.967 16.256 8.056C16.463 8.146 16.676 8.241 16.893 8.34C17.11 8.441 17.322 8.554 17.53 8.681C17.738 8.808 17.925 8.96 18.087 9.137C18.249 9.314 18.38 9.522 18.481 9.761C18.581 10.001 18.63 10.282 18.63 10.608C18.63 11.033 18.552 11.405 18.394 11.726C18.236 12.047 18.021 12.314 17.749 12.528C17.478 12.743 17.162 12.904 16.8 13.012C16.754 13.026 16.704 13.032 16.657 13.043V14.135H15.674V13.172C15.661 13.172 15.65 13.174 15.638 13.174C15.359 13.174 15.099 13.152 14.86 13.107C14.621 13.062 14.409 13.006 14.226 12.943C14.042 12.879 13.89 12.812 13.767 12.742C13.644 12.672 13.556 12.61 13.502 12.556C13.448 12.502 13.409 12.424 13.386 12.322C13.363 12.219 13.351 12.073 13.351 11.881C13.351 11.752 13.355 11.644 13.364 11.556C13.373 11.468 13.386 11.398 13.405 11.343C13.424 11.288 13.448 11.25 13.48 11.227C13.511 11.205 13.547 11.193 13.589 11.193C13.647 11.193 13.729 11.227 13.836 11.296C13.943 11.365 14.079 11.441 14.245 11.524C14.412 11.608 14.61 11.683 14.842 11.753C15.073 11.821 15.341 11.856 15.645 11.856C15.845 11.856 16.024 11.832 16.182 11.784C16.34 11.736 16.475 11.669 16.585 11.581C16.695 11.493 16.779 11.385 16.838 11.256C16.897 11.126 16.926 10.983 16.926 10.823C16.926 10.64 16.875 10.483 16.776 10.351C16.676 10.22 16.546 10.104 16.385 10.001C16.225 9.899 16.043 9.804 15.839 9.714C15.635 9.624 15.425 9.529 15.208 9.43C14.992 9.33 14.781 9.217 14.577 9.089C14.373 8.961 14.191 8.811 14.031 8.634C13.871 8.457 13.74 8.247 13.641 8.006C13.542 7.765 13.491 7.475 13.491 7.138C13.491 6.75 13.563 6.41 13.706 6.117C13.849 5.824 14.043 5.58 14.287 5.387C14.531 5.194 14.818 5.049 15.149 4.953C15.319 4.903 15.495 4.868 15.675 4.844V3.81H16.658V4.844C16.697 4.849 16.736 4.847 16.775 4.853C16.966 4.882 17.146 4.921 17.312 4.971C17.479 5.02 17.626 5.075 17.756 5.138C17.885 5.2 17.97 5.251 18.012 5.293C18.054 5.335 18.081 5.369 18.097 5.398C18.111 5.427 18.123 5.466 18.134 5.514C18.145 5.562 18.152 5.622 18.155 5.696C18.159 5.768 18.161 5.859 18.161 5.967C18.161 6.088 18.158 6.191 18.152 6.275C18.143 6.354 18.133 6.424 18.118 6.478ZM11 9C11 12.313 13.238 15 16 15H3V3H16C13.238 3 11 5.687 11 9ZM7 7C6.171 7 5.5 7.896 5.5 9C5.5 10.104 6.171 11 7 11C7.828 11 8.5 10.104 8.5 9C8.5 7.896 7.828 7 7 7Z"
                                        fill="#F57D1F" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="progress rounded-0" style="height: 5px">
                                <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #f57d1f"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 py-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-column">
                                <div class="col p-0" style="
                                        font-size: 24px;
                                        color: black;
                                        font-weight: 500;
                                        ">
                                    1 Projek
                                </div>
                                <div class="col p-0" style="font-size: 16px; color: #aaaaaa">
                                    Total Projek
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <svg width="36" height="37" viewBox="0 0 25 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 0.0125122L23.25 6.5077V14.25H20.75V9.25011L13.25 13.5802V25.2716L12 25.9933L0.75 19.4981V6.5077L12 0.0125122ZM20.75 15.5L20.75 19.25H24.5V21.75L20.75 21.75L20.75 25.5H18.25L18.25 21.75L14.5 21.75V19.25H18.25L18.25 15.5H20.75ZM3.24996 9.25005L3.25 18.0547L10.75 22.3848V13.5802L3.24996 9.25005ZM12 2.89926L4.625 7.15722L12 11.4152L19.375 7.15722L12 2.89926Z"
                                        fill="#F57D1F" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="progress rounded-0" style="height: 5px">
                                <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #f57d1f"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 py-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-column">
                                <div class="col p-0" style="
                                        font-size: 24px;
                                        color: black;
                                        font-weight: 500;
                                        ">
                                    2 Person
                                </div>
                                <div class="col p-0" style="font-size: 16px; color: #aaaaaa">
                                    Partner/Team
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5 13C9.7425 13 7.5 10.7575 7.5 8C7.5 5.2425 9.7425 3 12.5 3C15.2575 3 17.5 5.2425 17.5 8C17.5 10.7575 15.2575 13 12.5 13ZM17.1975 13.8412C18.905 12.4675 20 10.3625 20 8C20 3.8575 16.6425 0.5 12.5 0.5C8.3575 0.5 5 3.8575 5 8C5 10.3625 6.09501 12.4675 7.80251 13.8412C3.22876 15.56 0 19.8062 0 25.5H2.5C2.5 19.25 6.98625 15.5 12.5 15.5C18.0138 15.5 22.5 19.25 22.5 25.5H25C25 19.8062 21.7712 15.56 17.1975 13.8412Z"
                                        fill="#F57D1F" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="progress rounded-0" style="height: 5px">
                                <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #f57d1f"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 py-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-column">
                                <div class="col p-0" style="
                            font-size: 24px;
                            color: black;
                            font-weight: 500;
                            ">
                                    2 Brand
                                </div>
                                <div class="col p-0" style="font-size: 16px; color: #aaaaaa">
                                    Business Company
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <svg width="24" height="30" viewBox="0 0 24 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.4375 0H3.5625C2.81658 0 2.10119 0.296328 1.57375 0.823774C1.0463 1.35122 0.75 2.06658 0.75 2.8125V30H23.25V2.8125C23.25 2.06658 22.9537 1.35122 22.4263 0.823774C21.8988 0.296328 21.1834 0 20.4375 0ZM10.125 28.125V22.5H13.875V28.125H10.125ZM21.375 28.125H15.75V21.5625C15.75 21.3139 15.6512 21.0754 15.4754 20.8996C15.2996 20.7238 15.0611 20.625 14.8125 20.625H9.1875C8.93886 20.625 8.70042 20.7238 8.5246 20.8996C8.34879 21.0754 8.25 21.3139 8.25 21.5625V28.125H2.625V2.8125C2.625 2.56386 2.72379 2.32542 2.8996 2.1496C3.07542 1.97379 3.31386 1.875 3.5625 1.875H20.4375C20.6861 1.875 20.9246 1.97379 21.1004 2.1496C21.2762 2.32542 21.375 2.56386 21.375 2.8125V28.125ZM6.375 5.625H10.125V9.375H6.375V5.625ZM13.875 5.625H17.625V9.375H13.875V5.625ZM6.375 13.125H10.125V16.875H6.375V13.125ZM13.875 13.125H17.625V16.875H13.875V13.125Z"
                                        fill="#F57D1F" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="progress rounded-0" style="height: 5px">
                                <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #f57d1f"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-sm mt-3 mb-3">
            <div class="card-body text-center">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById("myChart");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [
                {
                    label: "# of Votes",
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
</script>
@endsection