<div class="container">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8fLQi5CCmZyYNokiOl3NlXxau0x8vj6Z25g&usqp=CAU" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h2><?= $result['id'] ?></h2>
        <h4 class="card-title font-weight-bold"><?= $result['name'] ?> <?= $result['Lastname'] ?></h4>
        <hr>
        <p><i class="fas fa-quote-left"></i> <?= $result['Nickname'] ?></p>
      </div>
    </div>
    
  </section>
</div>