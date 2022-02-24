@if ($isFull)
    <section class="hero is-medium">
        <div class="hero-body">
            <div class="columns is-centered has-text-centered">
                <div class="column is-6">
                    <span class="icon has-text-{{ $type }}">
                        <i class="fas fa-exclamation-triangle fa-6x"></i>
                    </span>
                    <article class="message content">
                        <div class="message-body has-border-top">
                            <h4>{{ $message }}</h4>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@else
    <div class="box is-shadowless">
        <div class="columns is-vcentered is-centered">
            <div class="column is-3 has-text-right">
                <span class="icon has-text-{{ $type }}">
                    <i class="fas fa-exclamation-triangle fa-2x"></i>
                </span>
            </div>
            <div class="column is-5">
                <article class="message">
                    <div class="message-body">
                        <p>{{ $message }}</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endif
