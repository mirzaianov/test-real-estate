export default async function startContacts() {
  const contacts = document.querySelector('.contacts');
  const contactsForm = contacts.querySelector('form');
  const contactsFormClose = contacts.querySelector('.button--contacts-form');

  contactsFormClose.addEventListener('click', (event) => {
    event.preventDefault();

    const isFormValid = contactsForm.checkValidity();

    if (isFormValid) {
      contactsForm.reset();
    } else {
      contactsForm.reportValidity();
    }
  });
}
