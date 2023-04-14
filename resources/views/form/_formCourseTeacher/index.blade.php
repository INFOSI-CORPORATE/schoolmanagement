<div class="row">
    <div class="col-md-6">
        <select class="form-control" name="fk_courses_id" id="fk_courses_id">

            <option {{ isset($courseTeacher) ? '' : 'selected' }}>Escolha o Curso</option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}" {{ (isset($courseTeacher) && $courseTeacher->courses->id == $course->id ) ? 'selected' : '' }}>{{ $course->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6">
        <select class="form-control" name="fk_teachers_id" id="fk_teachers_id">
            <option {{ isset($courseTeacher) ? '' : 'selected' }}>Escolha o Professor</option>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ (isset($courseTeacher) && $courseTeacher->teachers->id == $teacher->id ) ? 'selected' : '' }}>{{ $teacher->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($courseTeacher) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

