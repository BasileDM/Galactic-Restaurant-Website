class Review {
  constructor(data) {
    this.id = data.id;
    this.pictureUrl = data.pictureUrl;
    this.firstName = data.firstName;
    this.lastName = data.lastName;
    this.role = data.role;
    this.comments = data.comments;
  }

  get fullName() {
    return `${this.firstName} ${this.lastName}`;
  }

  // Get the value of id
  getId() {
    return this.id;
  }

  // Get the value of pictureUrl
  getPictureUrl() {
    return this.pictureUrl;
  }

  // Get the value of firstName
  getFirstName() {
    return this.firstName;
  }

  // Get the value of lastName
  getLastName() {
    return this.lastName;
  }

  // Get the value of role
  getRole() {
    return this.role;
  }

  // Get the value of comments
  getComments() {
    return this.comments;
  }

  // Set the value of id
  setId(id) {
    this.id = id;
  }

  // Set the value of pictureUrl
  setPictureUrl(pictureUrl) {
    this.pictureUrl = pictureUrl;
  }

  // Set the value of firstName
  setFirstName(firstName) {
    this.firstName = firstName;
  }

  // Set the value of lastName
  setLastName(lastName) {
    this.lastName = lastName;
  }

  // Set the value of role
  setRole(role) {
    this.role = role;
  }

  // Set the value of comments
  setComments(comments) {
    this.comments = comments;
  }
}

export default Review;
