@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                {{-- <div class="card-header">
                  <h4>HTML5 Form Basic</h4>
                </div> --}}
                <div class="card-body">
                  {{-- <div class="alert alert-info">
                    <b>Note!</b> Not all browsers support HTML5 type input.
                  </div> --}}
                <form action="{{ route('op.u', $operator->id)}}" method="POST">
                  @csrf
                  @method('patch')
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('id_op')
                            class="text-danger"
                        @enderror>ID Operator
                          @error('id_op')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="id_op"
                        @if (old('id_op'))
                          value="{{ old('id_op')}}"
                        @else
                          value="{{ $operator->id_op}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nm_op')
                            class="text-danger"
                        @enderror>Nama Operator
                          @error('nm_op')
                              | {{ $message}}
                          @enderror
                        </label>
                        <input type="text" name="nm_op" 
                        @if (old('nm_op'))
                          value="{{ old('nm_op')}}"
                        @else
                          value="{{ $operator->nm_op}}"
                        @endif 
                        class="form-control">
                      </div>
                    </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label @error('level')
                          class="text-danger"
                      @enderror>Level
                        @error('level')
                            | {{ $message}}
                        @enderror
                      </label>
                      <input type="text" name="level" 
                      @if (old('level'))
                        value="{{ old('level')}}"
                      @else
                        value="{{ $operator->level}}"
                      @endif 
                      class="form-control">
                    </div>
                  </div>

                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush