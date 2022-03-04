  <div class="list-item">
      <div class="list-item-image">
          @if ($achievement->photo)
              <figure class="image is-96x96">
                  <img src="{{ $achievement->photo }}" alt="">
              </figure>
          @else
              <figure class="image is-96x96 is-flex is-justify-content-center is-align-items-center">
                  <span class="icon is-large">
                      <i class="fas fa-image fa-4x has-text-light"></i>
                  </span>
              </figure>
          @endif
      </div>

      <div class="list-item-content">
          <div class="is-flex is-flex-wrap-wrap is-align-items-baseline">
              <span class="tags has-addons">
                  <span class="tag">
                      <i class="fas fa-hashtag"></i>
                  </span>
                  <span class="tag is-info">{{ $achievement->type }}</span>
              </span>
              <span class="tags has-addons ml-2">
                  <span class="tag">
                      <i class="fas fa-globe"></i>
                  </span>
                  <span class="tag is-info">{{ $achievement->level }}</span>
              </span>
              <span class="tags has-addons ml-2">
                  <span class="tag">
                      <i class="fas fa-calendar"></i>
                  </span>
                  <span class="tag is-info">{{ $achievement->date }}</span>
              </span>
          </div>
          <div class="list-item-title">{{ $achievement->title }}</div>
          <div class="list-item-description">
              <p class="content">
                  {{ $achievement->description }}
              </p>
              <div class="columns">
                  @if ($achievement->students)
                      <div class="column">
                          <div class="content">
                              <span class="is-size-7">
                                  Students
                              </span>
                              <br />
                              <span class="has-text-weight-bold">
                                  {{ $achievement->students }}
                              </span>
                          </div>
                      </div>
                  @endif
                  @if ($achievement->members)
                      <div class="column">
                          <div class="content">
                              <span class="is-size-7">
                                  Staff Members
                              </span>
                              <br />
                              <span class="has-text-weight-bold">
                                  {{ implode(', ', $achievement->members) }}
                              </span>
                          </div>
                      </div>
                  @endif
              </div>

          </div>
      </div>

      <div class="list-item-controls">
          @foreach ($achievement->docs as $label => $url)
              @if (!$loop->first)
                  <span class="has-text-grey mx-2">
                      &bullet;
                  </span>
              @endif
              <a class="is-primary is-outlined" href="{{ $url }}">
                  <span class="icon">
                      <i class="fas fa-external-link-alt"></i>
                  </span>
                  <span>{{ $label }}</span>
              </a>
          @endforeach
      </div>
  </div>
