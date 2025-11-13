CREATE DATABASE bibliotecadb;

USE bibliotecadb;

CREATE TABLE livro(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL
);

INSERT INTO livro (titulo, autor) VALUES
('Deep Learning', 'Ian Goodfellow, Yoshua Bengio, Aaron Courville'),
('Neural Networks and Deep Learning', 'Michael Nielsen'),
('Hands-On Machine Learning with Scikit-Learn, Keras, and TensorFlow', 'Aurélien Géron'),
('Deep Learning for Coders with fastai and PyTorch', 'Jeremy Howard, Sylvain Gugger'),
('Make Your Own Neural Network', 'Tariq Rashid'),
('Pattern Recognition and Machine Learning', 'Christopher M. Bishop'),
('Grokking Deep Learning', 'Andrew W. Trask'),
('Deep Learning with Python', 'François Chollet'),
('Reinforcement Learning: An Introduction', 'Richard S. Sutton, Andrew G. Barto'),
('Fundamentals of Deep Learning', 'Nikhil Buduma, Nicholas Locascio');