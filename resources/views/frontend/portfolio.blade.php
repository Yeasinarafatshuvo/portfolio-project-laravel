<!-- Protfolio Section -->
<section id="protfolio" class="protfolio_wrapper">
    <div class="row">
      <div class="col-sm-12 text-center mb-4">
        <span class="subtitle">My Completed Project</span>
        <h2>My Latest Project</h2>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, sapiente?<br class="d-none d-md-block">
        Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
    <div class="row">
      @foreach ($all_project_data as $project)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card p-0">   
            <span style="background-image: url('{{ asset('backend/images/'.$project->project_photo) }}');"  class="text-center pt-5 fw-bolder"><a href="{{  $project->project_url }}" target="_blank">{{ $project->project_name }}</a></span>
          </div>
        </div>
      @endforeach       
    </div>
  </section>