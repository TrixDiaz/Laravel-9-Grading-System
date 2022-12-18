@include('partials.head')

<main>
  <div class="edit">
    <div class="create-student">
      <a href="/Course" class="back">Back</a>
    </div>
    <div class="edit-form">

    <h1 class="title-stud">Edit Course</h1>
<div class="create-stud">
  <form action="/course/{{ $course->id }}" method="POST">
    @method('PUT')
    @csrf
    <label for="subj_name">Subject Name</label>
    <input class="input-form" type="text" id="subj_name" name="subj_name" placeholder="" value="{{ $course->subj_name }}" required>

    <label for="subj_code">Subject Code</label>
    <input class="input-form" type="text" id="subj_code" name="subj_code" placeholder="" value="{{ $course->subj_code }}" required>

    <label for="subj_unit">Subject Unit</label>
    <input class="input-form" type="number" id="subj_unit" name="subj_unit" placeholder="" value="{{ $course->subj_unit }}" required>


    <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
        add
        </span>Add Subject</button>
  </form>
</div>

</main>


@include('partials.foot')