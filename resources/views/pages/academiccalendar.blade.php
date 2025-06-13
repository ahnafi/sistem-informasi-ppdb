@extends('layouts.default')
@section('title', 'Kalender Akademik')

@section('main')
<div class="bg-white relative w-full min-h-screen overflow-x-hidden">
    <!-- Banner Section -->
    <div class="absolute w-full h-[455px] left-0 top-0 flex flex-col items-start gap-2.5 isolate">
        <div class="absolute w-full h-full left-0 top-0">
            <!-- Background Image -->
            <div class="absolute w-full h-full left-0 top-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/home/building.jpg') }}')"></div>
            <!-- Blue Overlay with Gradient -->
            <div class="absolute w-full h-full left-0 top-0 bg-gradient-to-r from-blue-600/80 via-blue-500/60 to-blue-400/30"></div>
            <div class="absolute w-full h-full left-0 top-0 bg-gradient-to-b from-blue-600/60 via-blue-500/40 to-transparent"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full h-full flex items-center z-10">
            <div class="flex flex-col items-start gap-4">
                <div class="flex flex-col items-start gap-2">
                    <h1 class="font-roboto font-medium text-[50px] leading-[59px] text-white drop-shadow-lg">Kalender Akademik</h1>
                    <div class="w-[501.5px] h-[2px] bg-white/70"></div>
                </div>
                <p class="font-roboto font-medium text-2xl leading-[28px] text-white/90 drop-shadow-md">SMA Hogwarts</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white mt-[455px]">
        <!-- Background Elements -->
        <div class="absolute w-[573px] h-[551px] right-[173px] top-[400px] bg-[#2D66F5] blur-[243.75px] opacity-30"></div>
        <div class="absolute w-[573px] h-[551px] left-[-551px] top-[800px] bg-[#2D66F5] blur-[250px] opacity-30"></div>
        <div class="absolute w-[573px] h-[551px] right-[147px] bottom-[200px] bg-[#2D66F5] blur-[250px] opacity-30"></div>

        <div class="relative max-w-7xl mx-auto px-4 py-16">
            @if($calendars->isEmpty())
                <div class="text-center py-12">
                    <div class="bg-white rounded-lg shadow-sm p-8 border">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Kalender Akademik</h3>
                        <p class="text-gray-500">Kalender akademik akan segera tersedia.</p>
                    </div>
                </div>
            @else
                @foreach($calendars as $calendar)
                    <!-- Academic Year Title -->
                    <div class="w-full text-center mb-12">
                        <h2 class="font-roboto font-semibold text-[40px] leading-[47px] text-gray-900">
                            {{ $calendar['title'] }}
                        </h2>
                        <div class="w-24 h-1 bg-blue-600 mx-auto mt-4"></div>
                    </div>

                    @if($calendar['events']->isNotEmpty())
                        @php
                            // Group events by semester or agenda name
                            $groupedEvents = $calendar['events']->groupBy('agenda_name');
                        @endphp

                        @foreach($groupedEvents as $agendaName => $agendaEvents)
                            <!-- Semester/Agenda Section -->
                            <div class="mb-16 max-w-4xl mx-auto">
                                <!-- Section Header -->
                                <div class="mb-8">
                                    <h3 class="font-roboto font-medium text-[25px] leading-[29px] text-gray-800 mb-2">
                                        {{ $agendaName }}
                                    </h3>
                                    <div class="w-full h-px bg-gradient-to-r from-blue-600 to-transparent"></div>
                                </div>

                                <!-- Modern Timeline -->
                                <div class="space-y-6">
                                    @foreach($agendaEvents as $event)
                                        <!-- Timeline Item -->
                                        <div class="flex gap-x-4">
                                            <!-- Left Content - Date -->
                                            <div class="min-w-24 text-end">
                                                <span class="text-sm font-medium text-gray-600">
                                                    {{ \Carbon\Carbon::parse($event['date'])->format('d M') }}
                                                </span>
                                                <div class="text-xs text-gray-400">
                                                    {{ \Carbon\Carbon::parse($event['date'])->format('Y') }}
                                                </div>
                                            </div>

                                            <!-- Icon/Timeline -->
                                            <div class="relative {{ !$loop->last ? 'after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200' : '' }}">
                                                <div class="relative z-10 size-7 flex justify-center items-center">
                                                    <div class="size-3 rounded-full bg-blue-500 border-2 border-white shadow-sm"></div>
                                                </div>
                                            </div>

                                            <!-- Right Content - Activity -->
                                            <div class="grow">
                                                <h4 class="font-semibold text-gray-800 text-lg mb-1">
                                                    {{ $event['activity'] }}
                                                </h4>
                                                <div class="flex items-center gap-2 text-sm text-gray-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                    </svg>
                                                    <span>{{ \Carbon\Carbon::parse($event['date'])->format('l, d F Y') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-12">
                            <div class="bg-gray-50 rounded-lg p-8 border">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-gray-500">Belum ada kegiatan untuk {{ $calendar['title'] }}.</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Roboto:wght@400;500;600&display=swap');

.font-roboto {
    font-family: 'Roboto', sans-serif;
}

.font-inter {
    font-family: 'Inter', sans-serif;
}

/* Timeline enhancements */
.timeline-item:hover .timeline-dot {
    transform: scale(1.2);
    transition: transform 0.2s ease;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .min-w-24 {
        min-width: 5rem;
    }
    
    .gap-x-4 {
        gap: 0.75rem;
    }
    
    h2 {
        font-size: 2rem !important;
        line-height: 2.25rem !important;
    }
    
    h3 {
        font-size: 1.5rem !important;
        line-height: 1.75rem !important;
    }
}

@media (max-width: 640px) {
    .flex.gap-x-4 {
        flex-direction: column;
        gap: 0.5rem;
        position: relative;
        padding-left: 2rem;
    }
    
    .flex.gap-x-4::before {
        content: '';
        position: absolute;
        left: 0.5rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e5e7eb;
    }
    
    .flex.gap-x-4:last-child::before {
        display: none;
    }
    
    .min-w-24 {
        min-width: auto;
        text-align: left;
    }
    
    .relative.after\:absolute {
        display: none;
    }
    
    .size-7 {
        position: absolute;
        left: -1.25rem;
        top: 0.25rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const events = @json($calendars->pluck('events')->flatten());
    console.log('Calendar Events:', events);
    
    // Add animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe all timeline items
    document.querySelectorAll('.flex.gap-x-4').forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(item);
    });
});
</script>
@endsection