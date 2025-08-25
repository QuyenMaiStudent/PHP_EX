import { Link, useForm } from "@inertiajs/react";
import "../../../css/contact.css";


function ContactForm({ contact = null, errors }) {
    const { data, setData, post, get, put, processing } = useForm({
        name: contact?.name || '',
        email: contact?.email || '',
        phone: contact?.phone || '',
    });

    const handleSubmit = (e) => {
        e.preventDefault();
        if (contact) {
            put(`/contacts/${contact.id}`);
        } else {
            post('/contacts');
        }
    };


  return (
    <div className="contact=container">
        <h2>{ contact ? 'Sửa liện hệ' : 'Thêm liên hệ' }</h2>
        <form onSubmit={handleSubmit} className="contact-form">
            <div>
                <label>Tên</label>
                <input value={data.name} onChange={e => setData('name', e.target.value)} />
                { errors?.name && <div className="contact-error">{errors.name}</div>}
            </div>
            <div>
                <label>Email</label>
                <input value={data.email} onChange={e => setData('email', e.target.value)} />
                { errors?.email && <div className="contact-error">{errors.email}</div>}
            </div>
            <div>
                <label>Điện thoại</label>
                <input type="number" value={data.phone} onChange={e => setData('phone', e.target.value)} maxLength={10} min="0" />
                { errors?.phone && <div className="contact-error">{errors.phone}</div>}
            </div>
            <button type="submit" disabled={processing} className="contact-save-btn">
                {contact ? 'Cập nhật' : 'Thêm mới' }
            </button>
            <Link href="/contacts" className="contact-cancel-btn">Quay lại</Link>
        </form>
    </div>
  );
}

export default ContactForm