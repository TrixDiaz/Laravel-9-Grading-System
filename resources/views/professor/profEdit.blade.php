@include('partials.head')

<main>
  <div class="edit">
    <div class="create-student">
      <a href="/Professor" class="back">Back</a>
    </div>

    <div class="edit-form">
    <h1 class="title-stud">Edit Professor</h1>
<div class="create-stud">
  <form action="/professor/{{ $prof->id }}" method="POST">
    @method('PUT')
    @csrf
    <label for="fname">First Name</label>
    <input class="input-form" type="text" id="fname" name="fname" placeholder="Given Name" value="{{ $prof->fname }}" required>

    <label for="lname">Last Name</label>
    <input class="input-form" type="text" id="lname" name="lname" placeholder="Family Name"   value="{{ $prof->lname }}" required>

    <label for="gender">Gender</label>
    <select id="gender" name="gender"  required>
      <option value="" selected disabled>Select Gender</option>
      <option value="Male" {{ $prof->gender }}>Male</option>
      <option value="Female" {{ $prof->gender }}>Female</option>
    </select>
    <label for="email">Email</label>
    <input class="input-form" type="email" id="email" name="email" placeholder="sample@gmail.com"  value="{{ $prof->email }}" required>

    <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
        add
        </span>Add Professor</button>
  </form>
      
</div>
    </div>

</main>

@include('partials.foot')