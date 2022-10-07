<div class="row">
    <div class="col-12 mb-3">
        <div class="form-floating">
            {!! Form::select($name, $values, $selected, ['class' => 'form-control form-select'.($errors->has($name) ? ' is-invalid ' : null), 'placeholder' => $text]) !!}
            {!! Form::label($name, $text, ['class' => 'form-label']) !!}
            @error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>
</div>
