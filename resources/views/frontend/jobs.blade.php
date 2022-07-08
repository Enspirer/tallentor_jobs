@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<link rel="stylesheet" href="{{url('css/landing_page/pages/jobs.css')}}">
<link rel="stylesheet" href="{{url('css/dashboard/employee/includes/search_bar.css')}}">
<link rel="stylesheet" href="{{url('css/dashboard/employee/pages/home.css')}}">

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            @include('frontend.user.includes.search_bar')
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="jobs-container">
                <div class="jobs-filter">
                    <div class="job-alert">
                        <form>
                            <div class="job-alert__title">Create Job Alert</div>
                            <p class="job-alert__text">Create a job alert now and never miss your feature job opportunities.</p>
                            <input type="text" class="form-control job-alert__input" placeholder="Enter Job Keywords">
                            <button type="submit" class="job-alert__btn btn-fill">Create Job Alert</button>
                        </form>
                    </div>
                    <div class="filter-sec">
                        <div class="filter-sec__cat">
                            <div class="filter-sec__cat--title">Job Type</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="full_time">
                                        <label class="form-check-label">Full Time</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="filter-sec__cat--count">243</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="part_time">
                                        <label class="form-check-label">Part Time</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="filter-sec__cat--count">243</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="contract">
                                        <label class="form-check-label">Contract</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="filter-sec__cat--count">243</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="internship">
                                        <label class="form-check-label">Internship</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="filter-sec__cat--count">243</div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-sec__cat">
                            <div class="filter-sec__cat--title">Modality</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="in_office">
                                        <label class="form-check-label">In-Office</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="filter-sec__cat--count">243</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remote">
                                        <label class="form-check-label">Remote</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="filter-sec__cat--count">243</div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-sec__cat">
                            <div class="filter-sec__cat--title">Country</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="anywhere">
                                        <label class="form-check-label">Anywhere</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="filter-sec__cat--count">243</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="uae">
                                        <label class="form-check-label">UAE</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="filter-sec__cat--count">243</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lk">
                                        <label class="form-check-label">Sri Lanka</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="filter-sec__cat--count">243</div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-sec__cat">
                            <div class="filter-sec__cat--title">Salary</div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label">Currency</label>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <select class="form-select">
                                        <option selected disabled>Choose...</option>
                                        <option>LKR</option>
                                        <option>USD</option>
                                        <option>AED</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                     <select class="form-select">
                                        <option selected disabled>Choose...</option>
                                        <option>Monthly</option>
                                        <option>Weekly</option>
                                        <option>Daily</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <price-range currency="$">
                                        <output> output </output>
                                        <div>
                                            <div>
                                                <input name="price-from" type="range" min="0" max="100" step="1" value="25" aria-label="From" />
                                                <input name="price-to" type="range" min="0" max="100" step="1" value="75" aria-label="To" />
                                            </div>
                                        </div>
                                    </price-range>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="no_salary_specified">
                                        <label class="form-check-label">Include if no salary specified</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jobs-list">
                    <div class="result-count">785 Jobs</div>
                    <div class="job-card">
                        <img src="{{url('images/company-logo.png')}}" alt="">
                        <div class="header">
                            <div class="duration">4 min ago</div>
                            <h5 class="title">Associate Technical Lead (Frontend)</h5>
                            <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                            <div class="tags">
                                <span class="tag purple">Fulltime</span>
                                <span class="tag blue">Developer</span>
                            </div>
                        </div>
                        <ul class="job-breadcrumb">
                            <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                            <li><a href="#">Web Development and Design</a></li>
                        </ul>
                        <div class="status">
                            <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                            <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                            <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                        </div>
                        <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="job-card">
                        <img src="{{url('images/company-logo.png')}}" alt="">
                        <div class="header">
                            <div class="duration">4 min ago</div>
                            <h5 class="title">Associate Technical Lead (Frontend)</h5>
                            <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                            <div class="tags">
                                <span class="tag purple">Fulltime</span>
                                <span class="tag blue">Developer</span>
                            </div>
                        </div>
                        <ul class="job-breadcrumb">
                            <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                            <li><a href="#">Web Development and Design</a></li>
                        </ul>
                        <div class="status">
                            <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                            <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                            <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                        </div>
                        <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="job-card">
                        <img src="{{url('images/company-logo.png')}}" alt="">
                        <div class="header">
                            <div class="duration">4 min ago</div>
                            <h5 class="title">Associate Technical Lead (Frontend)</h5>
                            <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                            <div class="tags">
                                <span class="tag purple">Fulltime</span>
                                <span class="tag blue">Developer</span>
                            </div>
                        </div>
                        <ul class="job-breadcrumb">
                            <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                            <li><a href="#">Web Development and Design</a></li>
                        </ul>
                        <div class="status">
                            <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                            <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                            <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                        </div>
                        <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="job-card">
                        <img src="{{url('images/company-logo.png')}}" alt="">
                        <div class="header">
                            <div class="duration">4 min ago</div>
                            <h5 class="title">Associate Technical Lead (Frontend)</h5>
                            <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                            <div class="tags">
                                <span class="tag purple">Fulltime</span>
                                <span class="tag blue">Developer</span>
                            </div>
                        </div>
                        <ul class="job-breadcrumb">
                            <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                            <li><a href="#">Web Development and Design</a></li>
                        </ul>
                        <div class="status">
                            <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                            <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                            <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                        </div>
                        <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="job-card">
                        <img src="{{url('images/company-logo.png')}}" alt="">
                        <div class="header">
                            <div class="duration">4 min ago</div>
                            <h5 class="title">Associate Technical Lead (Frontend)</h5>
                            <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                            <div class="tags">
                                <span class="tag purple">Fulltime</span>
                                <span class="tag blue">Developer</span>
                            </div>
                        </div>
                        <ul class="job-breadcrumb">
                            <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                            <li><a href="#">Web Development and Design</a></li>
                        </ul>
                        <div class="status">
                            <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                            <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                            <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                        </div>
                        <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="job-card">
                        <img src="{{url('images/company-logo.png')}}" alt="">
                        <div class="header">
                            <div class="duration">4 min ago</div>
                            <h5 class="title">Associate Technical Lead (Frontend)</h5>
                            <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                            <div class="tags">
                                <span class="tag purple">Fulltime</span>
                                <span class="tag blue">Developer</span>
                            </div>
                        </div>
                        <ul class="job-breadcrumb">
                            <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                            <li><a href="#">Web Development and Design</a></li>
                        </ul>
                        <div class="status">
                            <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                            <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                            <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                        </div>
                        <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
                    </div>
                    
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('after-scripts')

<script>
class PriceRange extends HTMLElement {
  constructor() {
    super();

    console.log('Price Range: Constructor', this);
  }

  connectedCallback() {
    // Elements
    this.elements = {
      container: this.querySelector('div'),
      track: this.querySelector('div > div'),
      from: this.querySelector('input:first-of-type'),
      to: this.querySelector('input:last-of-type'),
      output: this.querySelector('output')
    }

    // Event listeners
    this.elements.from.addEventListener('input', this.handleInput.bind(this));
    this.elements.to.addEventListener('input', this.handleInput.bind(this));

    // Properties
    this.currency = (this.hasAttribute('currency') &&
                     this.getAttribute('currency') !== undefined &&
                     this.getAttribute('currency') !== '') ? this.getAttribute('currency') : '£';
          
    // Update the DOM
    this.updateDom();

    console.log('Price Range: Connected', this);
  }

  disconnectedCallback() {
    delete this.elements;
    delete this.currency;

    console.log('Price Range: Disconnected', this);
  }
  
  get from() {
    return parseInt(this.elements.from.value);
  }
  get to() {
    return parseInt(this.elements.to.value);
  }
  
  handleInput(event) {
    if (parseInt(this.elements.to.value) - parseInt(this.elements.from.value) <= 1) {
      if (event.target === this.elements.from) {
        this.elements.from.value = (parseInt(this.elements.to.value) - 1);
      } else if (event.target === this.elements.to) {
        this.elements.to.value = (parseInt(this.elements.from.value) + 1);
      }
    }

    // Update the DOM
    this.updateDom();
    
    console.log('Price Range: Updated!!', {
      from: parseInt(this.elements.from.value),
      to: parseInt(this.elements.to.value)
    });
  }

  updateDom() {
    this.drawFill();
    this.drawOutput();
  }

  drawFill() {
    const percent1 = (this.elements.from.value / this.elements.from.max) * 100,
          percent2 = (this.elements.to.value / this.elements.to.max) * 100;

    this.elements.track.style.background = `linear-gradient(to right, var(--track-color) ${percent1}%, var(--track-highlight-color) ${percent1}%, var(--track-highlight-color) ${percent2}%, var(--track-color) ${percent2}%)`;
  }

  drawOutput() {
    this.elements.output.textContent = `${this.currency}${this.elements.from.value} - ${this.currency}${this.elements.to.value}`;
  }
}

customElements.define('price-range', PriceRange);
</script>

@endpush