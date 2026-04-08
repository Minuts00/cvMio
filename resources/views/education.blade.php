<x-navbar/>
 @php
            $educationItems = [
                [
                    'id' => 1,
                    'school' => 'Istituto Tecnico Economico V. De Fazio',
                    'qualification' => 'Diploma di Ragioniere Contabile',
                    'skills' => [
                        'Stesura bilanci aziendali',
                        'Stesura fatture e cambiali',
                        'Analisi aziendali e adattamenti di mercato',
                    ],
                ],
                [
                    'id' => 2,
                    'school' => 'Aulab S.R.L.',
                    'qualification' => 'IT Junior Software Developer',
                    'skills' => [
                        'Sviluppo web full stack attraverso PHP, JS, CSS e Laravel',
                        'Database relazionali e SQL',
                        'Metodologie Agile e SCRUM',
                        'Console Unix',
                    ],
                ],
            ];
        @endphp

        <main class="container education-page py-4">
            <h1 class="mb-2">Istruzione</h1>
            <p class="subtitle">Percorso formativo e competenze sviluppate.</p>

            <div class="row g-4">
                @foreach ($educationItems as $item)
                    <div class="col-12 col-md-6">
                        <div class="card education-card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title education-card__title">{{ $item['school'] }}</h5>
                                <p class="card-text education-card__text mb-4">{{ $item['qualification'] }}</p>

                                <button
                                    type="button"
                                    class="btn education-btn mt-auto"
                                    data-bs-toggle="modal"
                                    data-bs-target="#educationModal{{ $item['id'] }}"
                                >
                                    Vedi i dettagli
                                </button>
                            </div>
                        </div>
                    </div>

                    <div
                        class="modal fade"
                        id="educationModal{{ $item['id'] }}"
                        tabindex="-1"
                        aria-labelledby="educationModalLabel{{ $item['id'] }}"
                        aria-hidden="true"
                    >
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content education-modal">
                                <div class="modal-header education-modal__header">
                                    <h5 class="modal-title" id="educationModalLabel{{ $item['id'] }}">
                                        Competenze apprese - {{ $item['school'] }}
                                    </h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body education-modal__body">
                                    <ul class="mb-0">
                                        @foreach ($item['skills'] as $skill)
                                            <li>{{ $skill }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>