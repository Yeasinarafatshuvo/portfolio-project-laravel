 <!-- About Section -->
 <section id="about" class="about_wrapper">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <img src="{{ asset('backend/images/' .$all_banner_data['0']['Profile']['user_photo']) }}" class="img-fluid rounded-3" alt="about-us">
        </div>
        <div class="col-lg-7 ps-lg-5 text-center text-lg-start">
          <div class="my-3 my-lg-0">
            <span class="subtitle">My About Details</span>
            <h2>About Me</h2>
            <p>{{ $all_about_data['0']->about_me }}</p>
          </div>
          <div class="pt-4">
            <ul class="nav nav-pills mb-3 justify-content-center justify-content-lg-between" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-skill-tab" data-bs-toggle="pill" data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill" aria-selected="true">Frontend Skills</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Award-tab" data-bs-toggle="pill" data-bs-target="#pills-Award" type="button" role="tab" aria-controls="pills-Award" aria-selected="false">Backend Skills </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false">Experience</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-education-tab" data-bs-toggle="pill" data-bs-target="#pills-education" type="button" role="tab" aria-controls="pills-education" aria-selected="false">Education</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
                @foreach ($all_skill_data as $skills)
                <div class="single-progress">
                  <h6>{{ $skills->front_skill }}</h6>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{ $skills->font_value }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $skills->font_value }}%</div>
                  </div>
                </div>
                @endforeach             
              </div>
              <div class="tab-pane fade" id="pills-Award" role="tabpanel" aria-labelledby="pills-Award-tab">
                @foreach ($all_backend_data as $backend_items)
                  <div class="single-progress">
                    <h6>{{ $backend_items->back_skill }}</h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: {{  $backend_items->back_value }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{  $backend_items->back_value }}%</div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="tab-pane fade" id="pills-experience" role="tabpanel" aria-labelledby="pills-experience-tab">
                <ul class="text-start ps-0">
                  @foreach ($all_experience_data as $experience)
                    <li>
                      <a href="">Position:</a><span> {{ $experience->position }}</span> <p class="mb-0"><a href="">Organization:</a>  {{ $experience->organization }}</p><span>{{ $experience->time }}</span>
                    </li>
                  @endforeach
                </ul>
               
              </div>
              <div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">
                @foreach ($all_education_data as $education_data)
                <ul class="text-start ps-0">
                  <li>
                    <a href="">{{ $education_data->edu_level }}</a>
                    <p class="mb-0"><a href="">Organization: </a> {{ $education_data->edu_organization }}</p>
                    <p class="mb-0"><a href="">Passing Year: </a> {{ $education_data->passing_year }}</p>
                    <p class="mb-0"><a href="">Result: </a> {{ $education_data->result }}</p>
                  </li>
                </ul>
                @endforeach                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
