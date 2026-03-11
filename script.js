/**
 * SERVIALCANCE - JavaScript Functionality
 */

// Configuration
const CONTACT_CONFIG = {
    phone: '573118149803', // WhatsApp number (with country code, no +)
    email: 'servialcance00@gmail.com'
};

document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile Navigation Toggle
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
        });
        
        // Close menu when clicking on a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
            });
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const navHeight = document.querySelector('.nav').offsetHeight;
                    const targetPosition = target.offsetTop - navHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // Navbar background on scroll
    const navbar = document.querySelector('.nav');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Active nav link on scroll
    const sections = document.querySelectorAll('section[id]');
    
    function highlightNavLink() {
        const scrollPosition = window.scrollY + 150;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + sectionId) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }
    
    window.addEventListener('scroll', highlightNavLink);
    highlightNavLink();
    
    // Form submission - Send to WhatsApp and Email
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const company = document.getElementById('company').value;
            const phone = document.getElementById('phone').value;
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value;
            
            // Build message for WhatsApp
            const whatsappMessage = `*Nuevo mensaje de ServiAlcance*%0A%0A` +
                `*Nombre:* ${name}%0A` +
                `*Email:* ${email}%0A` +
                `*Empresa:* ${company || 'No especificada'}%0A` +
                `*Teléfono:* ${phone || 'No especificado'}%0A` +
                `*Servicio de interés:* ${service || 'No especificado'}%0A` +
                `*Mensaje:* ${message}`;
            
            // Open WhatsApp with pre-filled message
            const whatsappUrl = `https://wa.me/${CONTACT_CONFIG.phone}?text=${whatsappMessage}`;
            window.open(whatsappUrl, '_blank');
            
            // Build mailto link
            const mailtoSubject = encodeURIComponent(`Nuevo contacto desde web: ${name}`);
            const mailtoBody = encodeURIComponent(
                `Nuevo mensaje desde el formulario de contacto de ServiAlcance\n\n` +
                `Nombre: ${name}\n` +
                `Email: ${email}\n` +
                `Empresa: ${company || 'No especificada'}\n` +
                `Teléfono: ${phone || 'No especificado'}\n` +
                `Servicio de interés: ${service || 'No especificado'}\n\n` +
                `Mensaje:\n${message}`
            );
            
            // Open email client
            const emailUrl = `mailto:${CONTACT_CONFIG.email}?subject=${mailtoSubject}&body=${mailtoBody}`;
            window.location.href = emailUrl;
            
            // Show success message
            alert('Gracias por contactarnos. Te hemois enviado un mensaje por WhatsApp y abierto tu cliente de correo.');
            
            // Reset form
            this.reset();
        });
    }
});

