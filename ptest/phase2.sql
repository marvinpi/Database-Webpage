
-- Marvin Piard, Peter McFarlane

create table Voter (
  voter_id CHAR(5) CONSTRAINT ValidVoterID
		CHECK (voter_id LIKE 'v%'),
  name CHAR(30),
  address CHAR(30),
  dob DATE,
  PRIMARY KEY (voter_id)

);

insert into Voter values ('v001', 'John Doe', '123 Main St', '1957-10-19');
insert into Voter values ('v002', 'Jane Doe', '456 Maple St', '1986-04-11');
insert into Voter values ('v003', 'Emmett Brown', '1640 Riverside Dr', '1930-12-15');
insert into Voter values ('v004', 'Nancy Botwin', '237 South Agrestic Blvd', '1964-08-02');
insert into Voter values ('v005', 'Thomas Sawyer', '714 Birch St', '1975-05-13');
insert into Voter values ('v006', 'Huckleberry Finn', '716 Birch St', '1977-09-21');
insert into Voter values ('v007', 'Jeff Scott', '432 Park Ave', '1994-03-15');

create table Candidate (
  candidate_id CHAR(5) CONSTRAINT ValidCandidateID
		CHECK (candidate_id LIKE 'c%'),
  name CHAR(30),
  address CHAR(30),
  dob DATE,
  PRIMARY KEY (candidate_id)

);

insert into Candidate values ('c01', 'Donald J. Trump', '1600 Pennsylvania Ave', '1946-06-14');
insert into Candidate values ('c02', 'Joesph R. Biden', '1312 Delaware Ave', '1942-11-20');

create table Volunteer (
  volunteer_id CHAR(5) CONSTRAINT ValidVolunteerID
		CHECK (voter_id LIKE 'h%'),
  name CHAR(30),
  age NUMBER(2),
  volunteers_for CHAR(30),
  PRIMARY KEY (volunteer_id),
  FOREIGN KEY (voter_id) REFERENCES Voter(voter_id)

);

insert into Volunteer values ('h001', 'Jane Doe', 34, 'Biden');
insert into Volunteer values ('h001', 'Jeff Scott', 26, 'Trump');

create table Votes (
  voter_id CHAR(5),
  candidate_id CHAR(5),
  PRIMARY KEY (voter_id, candidate_id),
  FOREIGN KEY (voter_id) REFERENCES Voter(voter_id),
  FOREIGN KEY (candidate_id) REFERENCES Candidate(candidate_id)

);

insert into Votes values ('v001', 'c01');
insert into Votes values ('v002', 'c02');
insert into Votes values ('v003', 'c02');
insert into Votes values ('v004', 'c02');
insert into Votes values ('v005', 'c01');
insert into Votes values ('v006', 'c02');
insert into Votes values ('v007', 'c01');
